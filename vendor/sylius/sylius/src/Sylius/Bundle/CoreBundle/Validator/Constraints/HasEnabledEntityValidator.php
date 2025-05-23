<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\CoreBundle\Validator\Constraints;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\ConstraintDefinitionException;
use Webmozart\Assert\Assert;

final class HasEnabledEntityValidator extends ConstraintValidator
{
    private PropertyAccessor $accessor;

    public function __construct(private ManagerRegistry $registry)
    {
        $this->accessor = PropertyAccess::createPropertyAccessor();
    }

    /**
     * @throws \InvalidArgumentException
     * @throws ConstraintDefinitionException
     */
    public function validate($value, Constraint $constraint): void
    {
        /** @var HasEnabledEntity $constraint */
        Assert::isInstanceOf($constraint, HasEnabledEntity::class);

        $enabled = $this->accessor->getValue($value, $constraint->enabledPath);

        if ($enabled === true) {
            return;
        }

        $objectManager = $this->getProperObjectManager($constraint->objectManager, $value);

        $this->ensureEntityHasProvidedEnabledField($objectManager, $value, $constraint->enabledPath);

        $criteria = [$constraint->enabledPath => true];

        $repository = $objectManager->getRepository($value::class);
        $results = $repository->{$constraint->repositoryMethod}($criteria);

        /* If the result is a MongoCursor, it must be advanced to the first
         * element. Rewinding should have no ill effect if $result is another
         * iterator implementation.
         */
        if ($results instanceof \Iterator) {
            $results->rewind();
        } elseif (is_array($results)) {
            reset($results);
        }

        if ($this->isLastEnabledEntity($results, $value)) {
            $errorPath = null !== $constraint->errorPath ? $constraint->errorPath : $constraint->enabledPath;

            $this->context->buildViolation($constraint->message)->atPath($errorPath)->addViolation();
        }
    }

    /**
     * If no entity matched the query criteria or a single entity matched, which is the same as the entity being
     * validated, the entity is the last enabled entity available.
     *
     * @param object $entity
     */
    private function isLastEnabledEntity(array|\Iterator $result, $entity): bool
    {
        return !\is_countable($result) || 0 === count($result) ||
        (1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result)));
    }

    /**
     * @param object $entity
     */
    private function getProperObjectManager(?string $manager, $entity): ?ObjectManager
    {
        if ($manager) {
            $objectManager = $this->registry->getManager($manager);

            $this->validateObjectManager($objectManager, sprintf('Object manager "%s" does not exist.', $manager));
        } else {
            $objectManager = $this->registry->getManagerForClass($entity::class);

            $this->validateObjectManager(
                $objectManager,
                sprintf(
                    'Unable to find the object manager associated with an entity of class "%s".',
                    $entity::class,
                ),
            );
        }

        return $objectManager;
    }

    /**
     * @throws ConstraintDefinitionException
     */
    private function validateObjectManager(?ObjectManager $objectManager, string $exceptionMessage): void
    {
        if (!$objectManager) {
            throw new ConstraintDefinitionException($exceptionMessage);
        }
    }

    /**
     * @param object $entity
     *
     * @throws ConstraintDefinitionException
     */
    private function ensureEntityHasProvidedEnabledField(ObjectManager $objectManager, $entity, string $enabledPropertyPath): void
    {
        /** @var ClassMetadata $class */
        $class = $objectManager->getClassMetadata($entity::class);

        if (!$class->hasField($enabledPropertyPath) && !$class->hasAssociation($enabledPropertyPath)) {
            throw new ConstraintDefinitionException(
                sprintf("The field '%s' is not mapped by Doctrine, so it cannot be validated.", $enabledPropertyPath),
            );
        }
    }
}

<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\FixerConfiguration;

use PhpCsFixer\Preg;
use PhpCsFixer\Utils;
use ECSPrefix202505\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use ECSPrefix202505\Symfony\Component\OptionsResolver\OptionsResolver;
/**
 * @readonly
 */
final class FixerConfigurationResolver implements \PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface
{
    /**
     * @var list<FixerOptionInterface>
     *
     * @readonly
     */
    private $options;
    /**
     * @param iterable<FixerOptionInterface> $options
     */
    public function __construct(iterable $options)
    {
        $fixerOptionSorter = new \PhpCsFixer\FixerConfiguration\FixerOptionSorter();
        $this->validateOptions($options);
        $this->options = $fixerOptionSorter->sort($options);
        if (0 === \count($this->options)) {
            throw new \LogicException('Options cannot be empty.');
        }
    }
    public function getOptions() : array
    {
        return $this->options;
    }
    public function resolve(array $configuration) : array
    {
        $resolver = new OptionsResolver();
        foreach ($this->options as $option) {
            $name = $option->getName();
            if ($option instanceof \PhpCsFixer\FixerConfiguration\AliasedFixerOption) {
                $alias = $option->getAlias();
                if (\array_key_exists($alias, $configuration)) {
                    if (\array_key_exists($name, $configuration)) {
                        throw new InvalidOptionsException(\sprintf('Aliased option "%s"/"%s" is passed multiple times.', $name, $alias));
                    }
                    Utils::triggerDeprecation(new \RuntimeException(\sprintf('Option "%s" is deprecated, use "%s" instead.', $alias, $name)));
                    $configuration[$name] = $configuration[$alias];
                    unset($configuration[$alias]);
                }
            }
            if ($option->hasDefault()) {
                $resolver->setDefault($name, $option->getDefault());
            } else {
                $resolver->setRequired($name);
            }
            $allowedValues = $option->getAllowedValues();
            if (null !== $allowedValues) {
                foreach ($allowedValues as &$allowedValue) {
                    if (\is_object($allowedValue) && \is_callable($allowedValue)) {
                        $allowedValue = static function ($values) use($allowedValue) {
                            return $allowedValue($values);
                        };
                    }
                }
                $resolver->setAllowedValues($name, $allowedValues);
            }
            $allowedTypes = $option->getAllowedTypes();
            if (null !== $allowedTypes) {
                $allowedTypesNormalised = \array_map(static function (string $type) : string {
                    // Symfony OptionsResolver doesn't support `array<foo, bar>` natively, let's simplify the type
                    $matches = [];
                    if (\true === Preg::match('/array<\\w+,\\s*(\\??[\\w\'|]+)>/', $type, $matches)) {
                        if ('?' === $matches[1][0]) {
                            return 'array';
                        }
                        if ("'" === $matches[1][0]) {
                            return 'string[]';
                        }
                        return $matches[1] . '[]';
                    }
                    // Symfony OptionsResolver doesn't support 'class-string' natively, let's simplify the type
                    return \str_replace('class-string', 'string', $type);
                }, $allowedTypes);
                $resolver->setAllowedTypes($name, $allowedTypesNormalised);
            }
            $normalizer = $option->getNormalizer();
            if (null !== $normalizer) {
                $resolver->setNormalizer($name, $normalizer);
            }
        }
        return $resolver->resolve($configuration);
    }
    /**
     * @param iterable<FixerOptionInterface> $options
     *
     * @throws \LogicException when the option is already defined
     */
    private function validateOptions(iterable $options) : void
    {
        $names = [];
        foreach ($options as $option) {
            $name = $option->getName();
            if (\in_array($name, $names, \true)) {
                throw new \LogicException(\sprintf('The "%s" option is defined multiple times.', $name));
            }
            $names[] = $name;
        }
    }
}

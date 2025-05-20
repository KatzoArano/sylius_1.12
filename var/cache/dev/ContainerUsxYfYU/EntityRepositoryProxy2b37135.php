<?php

namespace ContainerUsxYfYU;

class EntityRepositoryProxy2b37135 extends \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'_class' => [parent::class, '_class', null, 8],
        "\0".'*'."\0".'_em' => [parent::class, '_em', null, 8],
        "\0".'*'."\0".'_entityName' => [parent::class, '_entityName', null, 8],
        '_class' => [parent::class, '_class', null, 8],
        '_em' => [parent::class, '_em', null, 8],
        '_entityName' => [parent::class, '_entityName', null, 8],
    ];

    public function add(\Sylius\Resource\Model\ResourceInterface $resource): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->add(...\func_get_args());
        } else {
            parent::add(...\func_get_args());
        }
    }

    public function remove(\Sylius\Resource\Model\ResourceInterface $resource): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->remove(...\func_get_args());
        } else {
            parent::remove(...\func_get_args());
        }
    }

    public function createPaginator(array $criteria = [], array $sorting = []): iterable
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->createPaginator(...\func_get_args());
        }

        return parent::createPaginator(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('EntityRepositoryProxy2b37135', false)) {
    \class_alias(__NAMESPACE__.'\\EntityRepositoryProxy2b37135', 'EntityRepositoryProxy2b37135', false);
}

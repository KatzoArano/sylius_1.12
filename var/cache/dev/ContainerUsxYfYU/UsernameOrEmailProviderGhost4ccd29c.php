<?php

namespace ContainerUsxYfYU;
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/AbstractUserProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/UsernameOrEmailProvider.php';

class UsernameOrEmailProviderGhost4ccd29c extends \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'canonicalizer' => [parent::class, 'canonicalizer', null, 8],
        "\0".'*'."\0".'supportedUserClass' => [parent::class, 'supportedUserClass', null, 8],
        "\0".'*'."\0".'userRepository' => [parent::class, 'userRepository', null, 8],
        'canonicalizer' => [parent::class, 'canonicalizer', null, 8],
        'supportedUserClass' => [parent::class, 'supportedUserClass', null, 8],
        'userRepository' => [parent::class, 'userRepository', null, 8],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('UsernameOrEmailProviderGhost4ccd29c', false)) {
    \class_alias(__NAMESPACE__.'\\UsernameOrEmailProviderGhost4ccd29c', 'UsernameOrEmailProviderGhost4ccd29c', false);
}

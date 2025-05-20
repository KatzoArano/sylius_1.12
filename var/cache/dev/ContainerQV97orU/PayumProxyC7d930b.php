<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Registry/GatewayRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Registry/GatewayFactoryRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Registry/StorageRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Registry/RegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Payum.php';

class PayumProxyC7d930b extends \Payum\Core\Payum implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'httpRequestVerifier' => [parent::class, 'httpRequestVerifier', null, 8],
        "\0".'*'."\0".'registry' => [parent::class, 'registry', null, 8],
        "\0".'*'."\0".'tokenFactory' => [parent::class, 'tokenFactory', null, 8],
        "\0".'*'."\0".'tokenStorage' => [parent::class, 'tokenStorage', null, 8],
        'httpRequestVerifier' => [parent::class, 'httpRequestVerifier', null, 8],
        'registry' => [parent::class, 'registry', null, 8],
        'tokenFactory' => [parent::class, 'tokenFactory', null, 8],
        'tokenStorage' => [parent::class, 'tokenStorage', null, 8],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PayumProxyC7d930b', false)) {
    \class_alias(__NAMESPACE__.'\\PayumProxyC7d930b', 'PayumProxyC7d930b', false);
}

<?php

namespace ContainerUsxYfYU;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Context/ShopperContextInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Context/ShopperContext.php';

class ShopperContextGhostEa43fa2 extends \Sylius\Component\Core\Context\ShopperContext implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'channelContext' => [parent::class, 'channelContext', null, 16],
        "\0".parent::class."\0".'currencyContext' => [parent::class, 'currencyContext', null, 16],
        "\0".parent::class."\0".'customerContext' => [parent::class, 'customerContext', null, 16],
        "\0".parent::class."\0".'localeContext' => [parent::class, 'localeContext', null, 16],
        'channelContext' => [parent::class, 'channelContext', null, 16],
        'currencyContext' => [parent::class, 'currencyContext', null, 16],
        'customerContext' => [parent::class, 'customerContext', null, 16],
        'localeContext' => [parent::class, 'localeContext', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ShopperContextGhostEa43fa2', false)) {
    \class_alias(__NAMESPACE__.'\\ShopperContextGhostEa43fa2', 'ShopperContextGhostEa43fa2', false);
}

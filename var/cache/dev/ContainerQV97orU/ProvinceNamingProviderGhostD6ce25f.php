<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Provider/ProvinceNamingProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Provider/ProvinceNamingProvider.php';

class ProvinceNamingProviderGhostD6ce25f extends \Sylius\Component\Addressing\Provider\ProvinceNamingProvider implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'provinceRepository' => [parent::class, 'provinceRepository', null, 16],
        'provinceRepository' => [parent::class, 'provinceRepository', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ProvinceNamingProviderGhostD6ce25f', false)) {
    \class_alias(__NAMESPACE__.'\\ProvinceNamingProviderGhostD6ce25f', 'ProvinceNamingProviderGhostD6ce25f', false);
}

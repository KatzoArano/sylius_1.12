<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Templating/Helper/CurrencyHelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Templating/Helper/CurrencyHelper.php';

class CurrencyHelperGhost0725218 extends \Sylius\Bundle\CurrencyBundle\Templating\Helper\CurrencyHelper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'charset' => [parent::class, 'charset', null, 8],
        'charset' => [parent::class, 'charset', null, 8],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CurrencyHelperGhost0725218', false)) {
    \class_alias(__NAMESPACE__.'\\CurrencyHelperGhost0725218', 'CurrencyHelperGhost0725218', false);
}

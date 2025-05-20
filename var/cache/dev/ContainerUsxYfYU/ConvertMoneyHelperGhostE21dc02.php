<?php

namespace ContainerUsxYfYU;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/ConvertMoneyHelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/ConvertMoneyHelper.php';

class ConvertMoneyHelperGhostE21dc02 extends \Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'charset' => [parent::class, 'charset', null, 8],
        "\0".parent::class."\0".'currencyConverter' => [parent::class, 'currencyConverter', null, 16],
        'charset' => [parent::class, 'charset', null, 8],
        'currencyConverter' => [parent::class, 'currencyConverter', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ConvertMoneyHelperGhostE21dc02', false)) {
    \class_alias(__NAMESPACE__.'\\ConvertMoneyHelperGhostE21dc02', 'ConvertMoneyHelperGhostE21dc02', false);
}

<?php

namespace ContainerUsxYfYU;
include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Bundle/Templating/Helper/GridHelper.php';

class GridHelperGhost28b8bf1 extends \Sylius\Bundle\GridBundle\Templating\Helper\GridHelper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'gridRenderer' => [parent::class, 'gridRenderer', null, 16],
        'gridRenderer' => [parent::class, 'gridRenderer', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('GridHelperGhost28b8bf1', false)) {
    \class_alias(__NAMESPACE__.'\\GridHelperGhost28b8bf1', 'GridHelperGhost28b8bf1', false);
}

<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Bundle/Templating/Helper/BulkActionGridHelper.php';

class BulkActionGridHelperGhostEbd9350 extends \Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'bulkActionGridRenderer' => [parent::class, 'bulkActionGridRenderer', null, 16],
        'bulkActionGridRenderer' => [parent::class, 'bulkActionGridRenderer', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('BulkActionGridHelperGhostEbd9350', false)) {
    \class_alias(__NAMESPACE__.'\\BulkActionGridHelperGhostEbd9350', 'BulkActionGridHelperGhostEbd9350', false);
}

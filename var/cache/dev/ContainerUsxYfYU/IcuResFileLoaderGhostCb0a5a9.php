<?php

namespace ContainerUsxYfYU;
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

class IcuResFileLoaderGhostCb0a5a9 extends \Symfony\Component\Translation\Loader\IcuResFileLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('IcuResFileLoaderGhostCb0a5a9', false)) {
    \class_alias(__NAMESPACE__.'\\IcuResFileLoaderGhostCb0a5a9', 'IcuResFileLoaderGhostCb0a5a9', false);
}

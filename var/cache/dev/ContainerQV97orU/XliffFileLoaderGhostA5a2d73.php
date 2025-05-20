<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';

class XliffFileLoaderGhostA5a2d73 extends \Symfony\Component\Translation\Loader\XliffFileLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('XliffFileLoaderGhostA5a2d73', false)) {
    \class_alias(__NAMESPACE__.'\\XliffFileLoaderGhostA5a2d73', 'XliffFileLoaderGhostA5a2d73', false);
}

<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';

class QtFileLoaderGhost1322a3f extends \Symfony\Component\Translation\Loader\QtFileLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('QtFileLoaderGhost1322a3f', false)) {
    \class_alias(__NAMESPACE__.'\\QtFileLoaderGhost1322a3f', 'QtFileLoaderGhost1322a3f', false);
}

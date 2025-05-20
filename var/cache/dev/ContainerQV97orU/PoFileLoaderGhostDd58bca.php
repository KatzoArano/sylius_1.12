<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';

class PoFileLoaderGhostDd58bca extends \Symfony\Component\Translation\Loader\PoFileLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PoFileLoaderGhostDd58bca', false)) {
    \class_alias(__NAMESPACE__.'\\PoFileLoaderGhostDd58bca', 'PoFileLoaderGhostDd58bca', false);
}

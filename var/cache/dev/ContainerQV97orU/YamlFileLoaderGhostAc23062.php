<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';

class YamlFileLoaderGhostAc23062 extends \Symfony\Component\Translation\Loader\YamlFileLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'yamlParser' => [parent::class, 'yamlParser', null, 16],
        'yamlParser' => [parent::class, 'yamlParser', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('YamlFileLoaderGhostAc23062', false)) {
    \class_alias(__NAMESPACE__.'\\YamlFileLoaderGhostAc23062', 'YamlFileLoaderGhostAc23062', false);
}

<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Context\ServiceContainer;

use Behat\Behat\Definition\ServiceContainer\DefinitionExtension;
use Behat\Behat\Snippet\ServiceContainer\SnippetExtension;
use Behat\Testwork\Argument\ServiceContainer\ArgumentExtension;
use Behat\Testwork\Autoloader\ServiceContainer\AutoloaderExtension;
use Behat\Testwork\Cli\ServiceContainer\CliExtension;
use Behat\Testwork\Environment\ServiceContainer\EnvironmentExtension;
use Behat\Testwork\Filesystem\ServiceContainer\FilesystemExtension;
use Behat\Testwork\ServiceContainer\Extension;
use Behat\Testwork\ServiceContainer\ExtensionManager;
use Behat\Testwork\ServiceContainer\ServiceProcessor;
use Behat\Testwork\Suite\ServiceContainer\SuiteExtension;
use Behat\Testwork\Translator\ServiceContainer\TranslatorExtension;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Behat context extension.
 *
 * Extends Behat with context services.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class ContextExtension implements Extension
{
    /**
     * Available services.
     */
    public const FACTORY_ID = 'context.factory';
    public const CONTEXT_SNIPPET_GENERATOR_ID = 'snippet.generator.context';
    public const AGGREGATE_RESOLVER_FACTORY_ID = 'context.argument.aggregate_resolver_factory';
    private const ENVIRONMENT_HANDLER_ID = EnvironmentExtension::HANDLER_TAG . '.context';
    private const ENVIRONMENT_READER_ID = EnvironmentExtension::READER_TAG . '.context';
    private const SUITE_SETUP_ID = SuiteExtension::SETUP_TAG . '.suite_with_contexts';
    private const ANNOTATED_CONTEXT_READER_ID = self::READER_TAG . '.annotated';
    private const ATTRIBUTED_CONTEXT_READER_ID = self::READER_TAG . '.attributed';

    /*
     * Available extension points
     */
    public const CLASS_RESOLVER_TAG = 'context.class_resolver';
    public const ARGUMENT_RESOLVER_TAG = 'context.argument_resolver';
    public const INITIALIZER_TAG = 'context.initializer';
    public const READER_TAG = 'context.reader';
    public const ANNOTATION_READER_TAG = 'context.annotation_reader';
    public const ATTRIBUTE_READER_TAG = 'context.attribute_reader';
    public const CLASS_GENERATOR_TAG = 'context.class_generator';
    public const SUITE_SCOPED_RESOLVER_FACTORY_TAG = 'context.argument.suite_resolver_factory';
    public const DOC_BLOCK_HELPER_ID = 'context.docblock_helper';

    /**
     * @var ServiceProcessor
     */
    private $processor;

    /**
     * Initializes compiler pass.
     */
    public function __construct(?ServiceProcessor $processor = null)
    {
        $this->processor = $processor ?: new ServiceProcessor();
    }

    public function getConfigKey()
    {
        return 'contexts';
    }

    public function initialize(ExtensionManager $extensionManager)
    {
    }

    public function configure(ArrayNodeDefinition $builder)
    {
    }

    public function load(ContainerBuilder $container, array $config)
    {
        $this->loadFactory($container);
        $this->loadArgumentResolverFactory($container);
        $this->loadEnvironmentHandler($container);
        $this->loadEnvironmentReader($container);
        $this->loadSuiteSetup($container);
        $this->loadSnippetAppender($container);
        $this->loadSnippetGenerators($container);
        $this->loadSnippetsController($container);
        $this->loadDefaultClassGenerators($container);
        $this->loadDefaultContextReaders($container);
        $this->loadDocblockHelper($container);
    }

    public function process(ContainerBuilder $container)
    {
        $this->processClassResolvers($container);
        $this->processArgumentResolverFactories($container);
        $this->processArgumentResolvers($container);
        $this->processContextInitializers($container);
        $this->processContextReaders($container);
        $this->processClassGenerators($container);
        $this->processAnnotationReaders($container);
        $this->processAttributeReaders($container);
    }

    /**
     * Loads context factory.
     */
    private function loadFactory(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\ContextFactory', [
            new Reference(ArgumentExtension::CONSTRUCTOR_ARGUMENT_ORGANISER_ID),
        ]);
        $container->setDefinition(self::FACTORY_ID, $definition);
    }

    /**
     * Loads argument resolver factory used in the environment handler.
     */
    private function loadArgumentResolverFactory(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Argument\CompositeArgumentResolverFactory');
        $container->setDefinition(self::AGGREGATE_RESOLVER_FACTORY_ID, $definition);
    }

    /**
     * Loads context environment handlers.
     */
    private function loadEnvironmentHandler(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Environment\Handler\ContextEnvironmentHandler', [
            new Reference(self::FACTORY_ID),
            new Reference(self::AGGREGATE_RESOLVER_FACTORY_ID),
        ]);
        $definition->addTag(EnvironmentExtension::HANDLER_TAG, ['priority' => 50]);
        $container->setDefinition(self::ENVIRONMENT_HANDLER_ID, $definition);
    }

    /**
     * Loads context environment readers.
     */
    private function loadEnvironmentReader(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Environment\Reader\ContextEnvironmentReader');
        $definition->addTag(EnvironmentExtension::READER_TAG, ['priority' => 50]);
        $container->setDefinition(self::ENVIRONMENT_READER_ID, $definition);
    }

    /**
     * Loads context environment setup.
     */
    private function loadSuiteSetup(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Suite\Setup\SuiteWithContextsSetup', [
            new Reference(AutoloaderExtension::CLASS_LOADER_ID),
            new Reference(FilesystemExtension::LOGGER_ID),
        ]);
        $definition->addTag(SuiteExtension::SETUP_TAG, ['priority' => 20]);
        $container->setDefinition(self::SUITE_SETUP_ID, $definition);
    }

    /**
     * Loads context snippet appender.
     */
    private function loadSnippetAppender(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Snippet\Appender\ContextSnippetAppender', [
            new Reference(FilesystemExtension::LOGGER_ID),
        ]);
        $definition->addTag(SnippetExtension::APPENDER_TAG, ['priority' => 50]);
        $container->setDefinition(SnippetExtension::APPENDER_TAG . '.context', $definition);
    }

    /**
     * Loads context snippet generators.
     */
    private function loadSnippetGenerators(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Snippet\Generator\ContextSnippetGenerator', [
            new Reference(DefinitionExtension::PATTERN_TRANSFORMER_ID),
        ]);
        $definition->addTag(SnippetExtension::GENERATOR_TAG, ['priority' => 50]);
        $container->setDefinition(self::CONTEXT_SNIPPET_GENERATOR_ID, $definition);
    }

    protected function loadSnippetsController(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Cli\ContextSnippetsController', [
            new Reference(self::CONTEXT_SNIPPET_GENERATOR_ID),
            new Reference(TranslatorExtension::TRANSLATOR_ID),
        ]);
        $definition->addTag(CliExtension::CONTROLLER_TAG, ['priority' => 410]);
        $container->setDefinition(CliExtension::CONTROLLER_TAG . '.context_snippets', $definition);
    }

    /**
     * Loads default context class generators.
     */
    private function loadDefaultClassGenerators(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\ContextClass\SimpleClassGenerator');
        $definition->addTag(self::CLASS_GENERATOR_TAG, ['priority' => 50]);
        $container->setDefinition(self::CLASS_GENERATOR_TAG . '.simple', $definition);
    }

    /**
     * Loads default context readers.
     */
    private function loadDefaultContextReaders(ContainerBuilder $container)
    {
        $this->loadAnnotatedContextReader($container);

        $this->loadAttributedContextReader($container);

        $this->loadTranslatableContextReader($container);
    }

    /**
     * Loads AnnotatedContextReader.
     */
    private function loadAnnotatedContextReader(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Reader\AnnotatedContextReader', [
            new Reference(self::DOC_BLOCK_HELPER_ID),
        ]);
        $container->setDefinition(self::ANNOTATED_CONTEXT_READER_ID, $definition);

        $definition = new Definition('Behat\Behat\Context\Reader\ContextReaderCachedPerContext', [
            new Reference(self::ANNOTATED_CONTEXT_READER_ID),
        ]);
        $definition->addTag(self::READER_TAG, ['priority' => 50]);
        $container->setDefinition(self::ANNOTATED_CONTEXT_READER_ID . '.cached', $definition);
    }

    /**
     * Loads AttributedContextReader.
     */
    private function loadAttributedContextReader(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Reader\AttributeContextReader');
        $container->setDefinition(self::ATTRIBUTED_CONTEXT_READER_ID, $definition);

        $definition = new Definition('Behat\Behat\Context\Reader\ContextReaderCachedPerContext', [
            new Reference(self::ATTRIBUTED_CONTEXT_READER_ID),
        ]);
        $definition->addTag(self::READER_TAG, ['priority' => 50]);
        $container->setDefinition(self::ATTRIBUTED_CONTEXT_READER_ID . '.cached', $definition);

        return $definition;
    }

    /**
     * Loads TranslatableContextReader.
     */
    private function loadTranslatableContextReader(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Reader\TranslatableContextReader', [
            new Reference(TranslatorExtension::TRANSLATOR_ID),
        ]);
        $container->setDefinition(self::READER_TAG . '.translatable', $definition);

        $definition = new Definition('Behat\Behat\Context\Reader\ContextReaderCachedPerSuite', [
            new Reference(self::READER_TAG . '.translatable'),
        ]);
        $definition->addTag(self::READER_TAG, ['priority' => 50]);
        $container->setDefinition(self::READER_TAG . '.translatable.cached', $definition);
    }

    /**
     * Loads DocBlockHelper.
     */
    private function loadDocblockHelper(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Context\Annotation\DocBlockHelper');

        $container->setDefinition(self::DOC_BLOCK_HELPER_ID, $definition);
    }

    /**
     * Processes all class resolvers.
     */
    private function processClassResolvers(ContainerBuilder $container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::CLASS_RESOLVER_TAG);
        $definition = $container->getDefinition(self::ENVIRONMENT_HANDLER_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerClassResolver', [$reference]);
        }
    }

    /**
     * Processes all argument resolver factories.
     *
     * @param ContainerBuilder $container
     */
    private function processArgumentResolverFactories($container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::SUITE_SCOPED_RESOLVER_FACTORY_TAG);
        $definition = $container->getDefinition(self::AGGREGATE_RESOLVER_FACTORY_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerFactory', [$reference]);
        }
    }

    /**
     * Processes all argument resolvers.
     */
    private function processArgumentResolvers(ContainerBuilder $container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::ARGUMENT_RESOLVER_TAG);
        $definition = $container->getDefinition(self::FACTORY_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerArgumentResolver', [$reference]);
        }
    }

    /**
     * Processes all context initializers.
     */
    private function processContextInitializers(ContainerBuilder $container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::INITIALIZER_TAG);
        $definition = $container->getDefinition(self::FACTORY_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerContextInitializer', [$reference]);
        }
    }

    /**
     * Processes all context readers.
     */
    private function processContextReaders(ContainerBuilder $container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::READER_TAG);
        $definition = $container->getDefinition(self::ENVIRONMENT_READER_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerContextReader', [$reference]);
        }
    }

    /**
     * Processes all class generators.
     */
    private function processClassGenerators(ContainerBuilder $container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::CLASS_GENERATOR_TAG);
        $definition = $container->getDefinition(self::SUITE_SETUP_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerClassGenerator', [$reference]);
        }
    }

    /**
     * Processes all annotation readers.
     */
    private function processAnnotationReaders(ContainerBuilder $container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::ANNOTATION_READER_TAG);
        $definition = $container->getDefinition(self::ANNOTATED_CONTEXT_READER_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerAnnotationReader', [$reference]);
        }
    }

    /**
     * Processes all attribute readers.
     */
    private function processAttributeReaders(ContainerBuilder $container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::ATTRIBUTE_READER_TAG);
        $definition = $container->getDefinition(self::ATTRIBUTED_CONTEXT_READER_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerAttributeReader', [$reference]);
        }
    }
}

<?php

/*
 * This file is part of the Behat Testwork.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\Specification\ServiceContainer;

use Behat\Testwork\ServiceContainer\Extension;
use Behat\Testwork\ServiceContainer\ExtensionManager;
use Behat\Testwork\ServiceContainer\ServiceProcessor;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

/**
 * Extends testwork with test specification services.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class SpecificationExtension implements Extension
{
    /*
     * Available services
     */
    public const FINDER_ID = 'specifications.finder';

    /*
     * Available extension points
     */
    public const LOCATOR_TAG = 'specifications.locator';

    /**
     * @var ServiceProcessor
     */
    private $processor;

    /**
     * Initializes extension.
     */
    public function __construct(?ServiceProcessor $processor = null)
    {
        $this->processor = $processor ?: new ServiceProcessor();
    }

    public function getConfigKey()
    {
        return 'specifications';
    }

    public function initialize(ExtensionManager $extensionManager)
    {
    }

    public function configure(ArrayNodeDefinition $builder)
    {
    }

    public function load(ContainerBuilder $container, array $config)
    {
        $this->loadFinder($container);
    }

    public function process(ContainerBuilder $container)
    {
        $this->processLocators($container);
    }

    /**
     * Loads specification finder.
     */
    private function loadFinder(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Testwork\Specification\SpecificationFinder');
        $container->setDefinition(self::FINDER_ID, $definition);
    }

    /**
     * Processes specification locators.
     */
    private function processLocators(ContainerBuilder $container)
    {
        $references = $this->processor->findAndSortTaggedServices($container, self::LOCATOR_TAG);
        $definition = $container->getDefinition(self::FINDER_ID);

        foreach ($references as $reference) {
            $definition->addMethodCall('registerSpecificationLocator', [$reference]);
        }
    }
}

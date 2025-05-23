<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Output\ServiceContainer\Formatter;

use Behat\Config\Formatter\JUnitFormatter;
use Behat\Testwork\Exception\ServiceContainer\ExceptionExtension;
use Behat\Testwork\Output\ServiceContainer\Formatter\FormatterFactory;
use Behat\Testwork\Output\ServiceContainer\OutputExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Behat junit formatter factory.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
final class JUnitFormatterFactory implements FormatterFactory
{
    /*
     * Available services
     */
    public const ROOT_LISTENER_ID = 'output.node.listener.junit';
    public const RESULT_TO_STRING_CONVERTER_ID = 'output.node.printer.result_to_string';

    public function buildFormatter(ContainerBuilder $container)
    {
        $this->loadRootNodeListener($container);
        $this->loadPrinterHelpers($container);
        $this->loadCorePrinters($container);
        $this->loadFormatter($container);
    }

    public function processFormatter(ContainerBuilder $container)
    {
    }

    /**
     * Loads printer helpers.
     */
    private function loadPrinterHelpers(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Output\Node\Printer\Helper\ResultToStringConverter');
        $container->setDefinition(self::RESULT_TO_STRING_CONVERTER_ID, $definition);
    }

    /**
     * Loads the printers used to print the basic JUnit report.
     */
    private function loadCorePrinters(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Output\Node\Printer\JUnit\JUnitSuitePrinter', [
            new Reference('output.junit.statistics'),
        ]);
        $container->setDefinition('output.node.printer.junit.suite', $definition);

        $definition = new Definition('Behat\Behat\Output\Node\Printer\JUnit\JUnitFeaturePrinter', [
            new Reference('output.junit.statistics'),
            new Reference('output.node.listener.junit.duration'),
        ]);
        $container->setDefinition('output.node.printer.junit.feature', $definition);

        $definition = new Definition('Behat\Behat\Output\Node\Printer\JUnit\JUnitScenarioPrinter', [
            new Reference(self::RESULT_TO_STRING_CONVERTER_ID),
            new Reference('output.node.listener.junit.outline'),
            new Reference('output.node.listener.junit.duration'),
        ]);
        $container->setDefinition('output.node.printer.junit.scenario', $definition);

        $definition = new Definition('Behat\Behat\Output\Node\Printer\JUnit\JUnitStepPrinter', [
            new Reference(ExceptionExtension::PRESENTER_ID),
        ]);
        $container->setDefinition('output.node.printer.junit.step', $definition);

        $definition = new Definition(
            'Behat\Behat\Output\Node\Printer\JUnit\JUnitSetupPrinter',
            [
                new Reference(ExceptionExtension::PRESENTER_ID),
            ]
        );
        $container->setDefinition('output.node.printer.junit.setup', $definition);
    }

    /**
     * Loads the node listeners required for JUnit printers to work.
     */
    private function loadRootNodeListener(ContainerBuilder $container)
    {
        $definition = new Definition(
            'Behat\Behat\Output\Node\EventListener\JUnit\JUnitOutlineStoreListener',
            [
                new Reference('output.node.printer.junit.suite'),
            ]
        );
        $container->setDefinition('output.node.listener.junit.outline', $definition);

        $definition = new Definition(
            'Behat\Behat\Output\Node\EventListener\JUnit\JUnitDurationListener'
        );

        $container->setDefinition('output.node.listener.junit.duration', $definition);

        $definition = new Definition('Behat\Testwork\Output\Node\EventListener\ChainEventListener', [
            [
                new Reference('output.node.listener.junit.duration'),
                new Definition('Behat\Behat\Output\Node\EventListener\JUnit\JUnitFeatureElementListener', [
                    new Reference('output.node.printer.junit.feature'),
                    new Reference('output.node.printer.junit.scenario'),
                    new Reference('output.node.printer.junit.step'),
                    new Reference('output.node.printer.junit.setup'),
                ]),
                new Reference('output.node.listener.junit.outline'),
            ],
        ]);
        $container->setDefinition(self::ROOT_LISTENER_ID, $definition);
    }

    /**
     * Loads formatter itself.
     */
    private function loadFormatter(ContainerBuilder $container)
    {
        $definition = new Definition('Behat\Behat\Output\Statistics\PhaseStatistics');
        $container->setDefinition('output.junit.statistics', $definition);

        $definition = new Definition('Behat\Testwork\Output\NodeEventListeningFormatter', [
            JUnitFormatter::NAME,
            'Outputs the failures in JUnit compatible files.',
            JUnitFormatter::defaults(),
            $this->createOutputPrinterDefinition(),
            new Definition('Behat\Testwork\Output\Node\EventListener\ChainEventListener', [
                [
                    new Reference(self::ROOT_LISTENER_ID),
                    new Definition('Behat\Behat\Output\Node\EventListener\Statistics\ScenarioStatsListener', [
                        new Reference('output.junit.statistics'),
                    ]),
                    new Definition('Behat\Behat\Output\Node\EventListener\Statistics\StepStatsListener', [
                        new Reference('output.junit.statistics'),
                        new Reference(ExceptionExtension::PRESENTER_ID),
                    ]),
                    new Definition('Behat\Behat\Output\Node\EventListener\Statistics\HookStatsListener', [
                        new Reference('output.junit.statistics'),
                        new Reference(ExceptionExtension::PRESENTER_ID),
                    ]),
                ],
            ]),
        ]);
        $definition->addTag(OutputExtension::FORMATTER_TAG, ['priority' => 100]);
        $container->setDefinition(OutputExtension::FORMATTER_TAG . '.junit', $definition);
    }

    /**
     * Creates output printer definition.
     *
     * @return Definition
     */
    private function createOutputPrinterDefinition()
    {
        return new Definition('Behat\Testwork\Output\Printer\JUnitOutputPrinter', [
            new Definition('Behat\Testwork\Output\Printer\Factory\FilesystemOutputFactory'),
        ]);
    }
}

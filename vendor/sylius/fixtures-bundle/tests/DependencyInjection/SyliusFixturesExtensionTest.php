<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\FixturesBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use PHPUnit\Framework\Assert;
use Sylius\Bundle\FixturesBundle\DependencyInjection\Compiler\FixtureRegistryPass;
use Sylius\Bundle\FixturesBundle\DependencyInjection\Compiler\ListenerRegistryPass;
use Sylius\Bundle\FixturesBundle\DependencyInjection\SyliusFixturesExtension;
use Sylius\Bundle\FixturesBundle\Fixture\FixtureInterface;
use Sylius\Bundle\FixturesBundle\Listener\ListenerInterface;
use Symfony\Component\DependencyInjection\Definition;

final class SyliusFixturesExtensionTest extends AbstractExtensionTestCase
{
    /**
     * @test
     */
    public function it_does_not_crash_if_no_suite_is_configured(): void
    {
        $this->expectNotToPerformAssertions();

        $this->load();
    }

    /**
     * @test
     */
    public function it_registers_configured_suites(): void
    {
        $this->load(['suites' => [
            'suite_name' => [],
        ]]);

        $suiteRegistryDefinition = $this->container->findDefinition('sylius_fixtures.suite_registry');
        $suiteMethodCall = $suiteRegistryDefinition->getMethodCalls()[0];

        Assert::assertSame('addSuite', $suiteMethodCall[0]);
        Assert::assertSame('suite_name', $suiteMethodCall[1][0]);
    }

    /**
     * @test
     */
    public function it_autoconfigures_fixtures_and_listeners(): void
    {
        $this->container->setDefinition(
            'acme.fixture_autoconfigured',
            (new Definition())
                ->setClass($this->createMock(FixtureInterface::class)::class)
                ->setAutoconfigured(true),
        );

        $this->container->setDefinition(
            'acme.listener_autoconfigured',
            (new Definition())
                ->setClass($this->createMock(ListenerInterface::class)::class)
                ->setAutoconfigured(true),
        );

        $this->load();
        $this->compile();

        $this->assertContainerBuilderHasServiceDefinitionWithTag(
            'acme.fixture_autoconfigured',
            FixtureRegistryPass::FIXTURE_SERVICE_TAG,
        );

        $this->assertContainerBuilderHasServiceDefinitionWithTag(
            'acme.listener_autoconfigured',
            ListenerRegistryPass::LISTENER_SERVICE_TAG,
        );
    }

    protected function getContainerExtensions(): array
    {
        return [new SyliusFixturesExtension()];
    }
}

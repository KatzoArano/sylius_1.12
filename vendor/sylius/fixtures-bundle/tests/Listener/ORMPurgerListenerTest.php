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

namespace Sylius\Bundle\FixturesBundle\Tests\Listener;

use Doctrine\Persistence\ManagerRegistry;
use Matthias\SymfonyConfigTest\PhpUnit\ConfigurationTestCaseTrait;
use PHPUnit\Framework\TestCase;
use Sylius\Bundle\FixturesBundle\Listener\ORMPurgerListener;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class ORMPurgerListenerTest extends TestCase
{
    use ConfigurationTestCaseTrait;

    /**
     * @test
     */
    public function purge_mode_is_set_to_delete_by_default(): void
    {
        $this->assertProcessedConfigurationEquals([[]], ['mode' => 'delete'], 'mode');
    }

    /**
     * @test
     */
    public function purge_mode_can_be_changed_to_truncate(): void
    {
        $this->assertProcessedConfigurationEquals([['mode' => 'truncate']], ['mode' => 'truncate'], 'mode');
    }

    /**
     * @test
     */
    public function purge_mode_can_be_either_delete_or_truncate(): void
    {
        $this->assertPartialConfigurationIsInvalid([['mode' => 'lol']], 'mode');
    }

    /**
     * @test
     */
    public function managers_are_set_to_null_by_default(): void
    {
        $this->assertProcessedConfigurationEquals([[]], ['managers' => [null]], 'managers');
    }

    /**
     * @test
     */
    public function managers_are_optional(): void
    {
        $this->assertProcessedConfigurationEquals([['managers' => ['custom']]], ['managers' => ['custom']], 'managers');
    }

    protected function getConfiguration(): ConfigurationInterface
    {
        return new ORMPurgerListener($this->getMockBuilder(ManagerRegistry::class)->getMock());
    }
}

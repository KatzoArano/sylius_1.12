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

namespace Sylius\Bundle\FixturesBundle\Listener;

use Webmozart\Assert\Assert;

final class ListenerRegistry implements ListenerRegistryInterface
{
    /** @var array<string, ListenerInterface> */
    private array $listeners = [];

    public function addListener(ListenerInterface $listener): void
    {
        Assert::keyNotExists($this->listeners, $listener->getName(), 'Listener with name "%s" is already registered.');

        $this->listeners[$listener->getName()] = $listener;
    }

    public function getListener(string $name): ListenerInterface
    {
        if (!isset($this->listeners[$name])) {
            throw new ListenerNotFoundException($name);
        }

        return $this->listeners[$name];
    }

    public function getListeners(): array
    {
        return $this->listeners;
    }
}

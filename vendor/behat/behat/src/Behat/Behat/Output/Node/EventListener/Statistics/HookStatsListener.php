<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Output\Node\EventListener\Statistics;

use Behat\Behat\Output\Statistics\HookStat;
use Behat\Behat\Output\Statistics\Statistics;
use Behat\Testwork\Call\CallResult;
use Behat\Testwork\Event\Event;
use Behat\Testwork\EventDispatcher\Event\AfterSetup;
use Behat\Testwork\EventDispatcher\Event\AfterTested;
use Behat\Testwork\Exception\ExceptionPresenter;
use Behat\Testwork\Hook\Call\HookCall;
use Behat\Testwork\Hook\Call\RuntimeHook;
use Behat\Testwork\Hook\Tester\Setup\HookedSetup;
use Behat\Testwork\Hook\Tester\Setup\HookedTeardown;
use Behat\Testwork\Output\Formatter;
use Behat\Testwork\Output\Node\EventListener\EventListener;

/**
 * Listens and records hook stats.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class HookStatsListener implements EventListener
{
    /**
     * @var Statistics
     */
    private $statistics;
    /**
     * @var ExceptionPresenter
     */
    private $exceptionPresenter;

    /**
     * Initializes listener.
     */
    public function __construct(Statistics $statistics, ExceptionPresenter $exceptionPresenter)
    {
        $this->statistics = $statistics;
        $this->exceptionPresenter = $exceptionPresenter;
    }

    public function listenEvent(Formatter $formatter, Event $event, $eventName)
    {
        $this->captureHookStatsOnEvent($event);
    }

    /**
     * Captures hook stats on hooked event.
     */
    private function captureHookStatsOnEvent(Event $event)
    {
        if ($event instanceof AfterSetup && $event->getSetup() instanceof HookedSetup) {
            $this->captureBeforeHookStats($event->getSetup());
        }

        if ($event instanceof AfterTested && $event->getTeardown() instanceof HookedTeardown) {
            $this->captureAfterHookStats($event->getTeardown());
        }
    }

    /**
     * Captures before hook stats.
     */
    private function captureBeforeHookStats(HookedSetup $setup)
    {
        $hookCallResults = $setup->getHookCallResults();

        foreach ($hookCallResults as $hookCallResult) {
            $this->captureHookStat($hookCallResult);
        }
    }

    /**
     * Captures before hook stats.
     */
    private function captureAfterHookStats(HookedTeardown $teardown)
    {
        $hookCallResults = $teardown->getHookCallResults();

        foreach ($hookCallResults as $hookCallResult) {
            $this->captureHookStat($hookCallResult);
        }
    }

    /**
     * Captures hook call result.
     */
    private function captureHookStat(CallResult $hookCallResult)
    {
        $call = $hookCallResult->getCall();
        assert($call instanceof HookCall);
        $callee = $call->getCallee();
        $scope = $call->getScope();
        $path = $callee->getPath();
        $stdOut = $hookCallResult->getStdOut();
        $error = $hookCallResult->getException()
            ? $this->exceptionPresenter->presentException($hookCallResult->getException())
            : null;

        assert($callee instanceof RuntimeHook);
        $stat = new HookStat((string) $callee, $path, $error, $stdOut);
        if (!$stat->isSuccessful()) {
            $stat->setScope($scope);
        }
        $this->statistics->registerHookStat($stat);
    }
}

<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Hook\Call;

use Behat\Behat\Hook\Scope\FeatureScope;
use Behat\Gherkin\Filter\NameFilter;
use Behat\Gherkin\Filter\TagFilter;
use Behat\Gherkin\Node\FeatureNode;
use Behat\Testwork\Call\Exception\BadCallbackException;
use Behat\Testwork\Hook\Call\RuntimeFilterableHook;
use Behat\Testwork\Hook\Scope\HookScope;

/**
 * Represents a feature hook.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
abstract class RuntimeFeatureHook extends RuntimeFilterableHook
{
    /**
     * Initializes hook.
     *
     * @param string                               $scopeName
     * @param string|null                          $filterString
     * @param callable|array{class-string, string} $callable
     * @param string|null                          $description
     *
     * @throws BadCallbackException If callback is method, but not a static one
     */
    public function __construct($scopeName, $filterString, $callable, $description = null)
    {
        parent::__construct($scopeName, $filterString, $callable, $description);

        $this->throwIfInstanceMethod($callable, 'Feature');
    }

    public function filterMatches(HookScope $scope)
    {
        if (!$scope instanceof FeatureScope) {
            return false;
        }

        if (null === ($filterString = $this->getFilterString())) {
            return true;
        }

        return $this->isMatch($scope->getFeature(), $filterString);
    }

    /**
     * @param string      $filterString
     *
     * @return bool
     */
    private function isMatch(FeatureNode $feature, $filterString)
    {
        if (false !== strpos($filterString, '@')) {
            return $this->isMatchTagFilter($feature, $filterString);
        }

        if (!empty($filterString)) {
            return $this->isMatchNameFilter($feature, $filterString);
        }

        return false;
    }

    /**
     * Checks if feature matches tag filter.
     *
     * @param string      $filterString
     *
     * @return bool
     */
    private function isMatchTagFilter(FeatureNode $feature, $filterString)
    {
        $filter = new TagFilter($filterString);

        return $filter->isFeatureMatch($feature);
    }

    /**
     * Checks if feature matches name filter.
     *
     * @param string      $filterString
     *
     * @return bool
     */
    private function isMatchNameFilter(FeatureNode $feature, $filterString)
    {
        $filter = new NameFilter($filterString);

        return $filter->isFeatureMatch($feature);
    }
}

<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'WhiteOctoberPagerfanta'.\DIRECTORY_SEPARATOR.'ExceptionsStrategyConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class WhiteOctoberPagerfantaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $exceptionsStrategy;
    private $defaultView;
    private $_usedProperties = [];

    /**
     * @default {"out_of_range_page":"to_http_not_found","not_valid_current_page":"to_http_not_found"}
    */
    public function exceptionsStrategy(array $value = []): \Symfony\Config\WhiteOctoberPagerfanta\ExceptionsStrategyConfig
    {
        if (null === $this->exceptionsStrategy) {
            $this->_usedProperties['exceptionsStrategy'] = true;
            $this->exceptionsStrategy = new \Symfony\Config\WhiteOctoberPagerfanta\ExceptionsStrategyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "exceptionsStrategy()" has already been initialized. You cannot pass values the second time you call exceptionsStrategy().');
        }

        return $this->exceptionsStrategy;
    }

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultView($value): static
    {
        $this->_usedProperties['defaultView'] = true;
        $this->defaultView = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'white_october_pagerfanta';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('exceptions_strategy', $value)) {
            $this->_usedProperties['exceptionsStrategy'] = true;
            $this->exceptionsStrategy = new \Symfony\Config\WhiteOctoberPagerfanta\ExceptionsStrategyConfig($value['exceptions_strategy']);
            unset($value['exceptions_strategy']);
        }

        if (array_key_exists('default_view', $value)) {
            $this->_usedProperties['defaultView'] = true;
            $this->defaultView = $value['default_view'];
            unset($value['default_view']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['exceptionsStrategy'])) {
            $output['exceptions_strategy'] = $this->exceptionsStrategy->toArray();
        }
        if (isset($this->_usedProperties['defaultView'])) {
            $output['default_view'] = $this->defaultView;
        }

        return $output;
    }

}

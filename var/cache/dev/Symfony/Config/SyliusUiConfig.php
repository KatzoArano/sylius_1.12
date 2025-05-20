<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusUi'.\DIRECTORY_SEPARATOR.'EventConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusUiConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $useWebpack;
    private $events;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useWebpack($value): static
    {
        $this->_usedProperties['useWebpack'] = true;
        $this->useWebpack = $value;

        return $this;
    }

    public function event(string $event_name, array $value = []): \Symfony\Config\SyliusUi\EventConfig
    {
        if (!isset($this->events[$event_name])) {
            $this->_usedProperties['events'] = true;
            $this->events[$event_name] = new \Symfony\Config\SyliusUi\EventConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "event()" has already been initialized. You cannot pass values the second time you call event().');
        }

        return $this->events[$event_name];
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_ui';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('use_webpack', $value)) {
            $this->_usedProperties['useWebpack'] = true;
            $this->useWebpack = $value['use_webpack'];
            unset($value['use_webpack']);
        }

        if (array_key_exists('events', $value)) {
            $this->_usedProperties['events'] = true;
            $this->events = array_map(fn ($v) => new \Symfony\Config\SyliusUi\EventConfig($v), $value['events']);
            unset($value['events']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['useWebpack'])) {
            $output['use_webpack'] = $this->useWebpack;
        }
        if (isset($this->_usedProperties['events'])) {
            $output['events'] = array_map(fn ($v) => $v->toArray(), $this->events);
        }

        return $output;
    }

}

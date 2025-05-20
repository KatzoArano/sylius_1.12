<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusOrder'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusOrder'.\DIRECTORY_SEPARATOR.'ExpirationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusOrderConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $resources;
    private $expiration;
    private $_usedProperties = [];

    /**
     * @default 'doctrine/orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function driver($value): static
    {
        $this->_usedProperties['driver'] = true;
        $this->driver = $value;

        return $this;
    }

    /**
     * @default {"order":{"classes":{"model":"Sylius\\Component\\Order\\Model\\Order","interface":"Sylius\\Component\\Order\\Model\\OrderInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderType"}},"order_item":{"classes":{"model":"Sylius\\Component\\Order\\Model\\OrderItem","interface":"Sylius\\Component\\Order\\Model\\OrderItemInterface","controller":"Sylius\\Bundle\\OrderBundle\\Controller\\OrderItemController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType"}},"order_item_unit":{"classes":{"model":"Sylius\\Component\\Order\\Model\\OrderItemUnit","interface":"Sylius\\Component\\Order\\Model\\OrderItemUnitInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Order\\Factory\\OrderItemUnitFactory"}},"adjustment":{"classes":{"model":"Sylius\\Component\\Order\\Model\\Adjustment","interface":"Sylius\\Component\\Order\\Model\\AdjustmentInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory"}},"order_sequence":{"classes":{"model":"Sylius\\Component\\Order\\Model\\OrderSequence","interface":"Sylius\\Component\\Order\\Model\\OrderSequenceInterface","factory":"Sylius\\Component\\Resource\\Factory\\Factory"}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusOrder\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusOrder\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    /**
     * @default {"cart":"2 days","order":"5 days"}
    */
    public function expiration(array $value = []): \Symfony\Config\SyliusOrder\ExpirationConfig
    {
        if (null === $this->expiration) {
            $this->_usedProperties['expiration'] = true;
            $this->expiration = new \Symfony\Config\SyliusOrder\ExpirationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "expiration()" has already been initialized. You cannot pass values the second time you call expiration().');
        }

        return $this->expiration;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_order';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusOrder\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }

        if (array_key_exists('expiration', $value)) {
            $this->_usedProperties['expiration'] = true;
            $this->expiration = new \Symfony\Config\SyliusOrder\ExpirationConfig($value['expiration']);
            unset($value['expiration']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['driver'])) {
            $output['driver'] = $this->driver;
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }
        if (isset($this->_usedProperties['expiration'])) {
            $output['expiration'] = $this->expiration->toArray();
        }

        return $output;
    }

}

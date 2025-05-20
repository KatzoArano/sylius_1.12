<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusAddressing'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusAddressingConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $provider;
    private $resources;
    private $scopes;
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
     * @default 'sylius.province_name_provider'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): static
    {
        $this->_usedProperties['provider'] = true;
        $this->provider = $value;

        return $this;
    }

    /**
     * @default {"address":{"classes":{"model":"Sylius\\Component\\Addressing\\Model\\Address","interface":"Sylius\\Component\\Addressing\\Model\\AddressInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType"}},"address_log_entry":{"classes":{"model":"Sylius\\Component\\Addressing\\Model\\AddressLogEntry","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory"}},"country":{"classes":{"model":"Sylius\\Component\\Addressing\\Model\\Country","interface":"Sylius\\Component\\Addressing\\Model\\CountryInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType"}},"province":{"classes":{"model":"Sylius\\Component\\Addressing\\Model\\Province","interface":"Sylius\\Component\\Addressing\\Model\\ProvinceInterface","controller":"Sylius\\Bundle\\AddressingBundle\\Controller\\ProvinceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType"}},"zone":{"classes":{"model":"Sylius\\Component\\Addressing\\Model\\Zone","interface":"Sylius\\Component\\Addressing\\Model\\ZoneInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType"}},"zone_member":{"classes":{"model":"Sylius\\Component\\Addressing\\Model\\ZoneMember","interface":"Sylius\\Component\\Addressing\\Model\\ZoneMemberInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType"}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusAddressing\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusAddressing\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    /**
     * @return $this
     */
    public function scopes(string $name, mixed $value): static
    {
        $this->_usedProperties['scopes'] = true;
        $this->scopes[$name] = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_addressing';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('provider', $value)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $value['provider'];
            unset($value['provider']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusAddressing\ResourcesConfig($value['resources']);
            unset($value['resources']);
        }

        if (array_key_exists('scopes', $value)) {
            $this->_usedProperties['scopes'] = true;
            $this->scopes = $value['scopes'];
            unset($value['scopes']);
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
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }
        if (isset($this->_usedProperties['scopes'])) {
            $output['scopes'] = $this->scopes;
        }

        return $output;
    }

}

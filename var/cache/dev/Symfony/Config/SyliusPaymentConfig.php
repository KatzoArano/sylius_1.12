<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayment'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusPaymentConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
    private $gateways;
    private $resources;
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
     * @return $this
     */
    public function gateways(string $name, mixed $value): static
    {
        $this->_usedProperties['gateways'] = true;
        $this->gateways[$name] = $value;

        return $this;
    }

    /**
     * @default {"payment_method":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\PaymentMethod","interface":"Sylius\\Component\\Payment\\Model\\PaymentMethodInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodType"},"translation":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\PaymentMethodTranslation","interface":"Sylius\\Component\\Payment\\Model\\PaymentMethodTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType"}}},"payment":{"classes":{"model":"Sylius\\Component\\Payment\\Model\\Payment","interface":"Sylius\\Component\\Payment\\Model\\PaymentInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentType"}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusPayment\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPayment\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_payment';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('gateways', $value)) {
            $this->_usedProperties['gateways'] = true;
            $this->gateways = $value['gateways'];
            unset($value['gateways']);
        }

        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusPayment\ResourcesConfig($value['resources']);
            unset($value['resources']);
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
        if (isset($this->_usedProperties['gateways'])) {
            $output['gateways'] = $this->gateways;
        }
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }

        return $output;
    }

}

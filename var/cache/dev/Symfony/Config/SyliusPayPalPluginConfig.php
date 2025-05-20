<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayPalPlugin'.\DIRECTORY_SEPARATOR.'LoggingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusPayPalPluginConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $sandbox;
    private $logging;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sandbox($value): static
    {
        $this->_usedProperties['sandbox'] = true;
        $this->sandbox = $value;

        return $this;
    }

    /**
     * @default {"increased":false}
    */
    public function logging(array $value = []): \Symfony\Config\SyliusPayPalPlugin\LoggingConfig
    {
        if (null === $this->logging) {
            $this->_usedProperties['logging'] = true;
            $this->logging = new \Symfony\Config\SyliusPayPalPlugin\LoggingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "logging()" has already been initialized. You cannot pass values the second time you call logging().');
        }

        return $this->logging;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_pay_pal_plugin';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('sandbox', $value)) {
            $this->_usedProperties['sandbox'] = true;
            $this->sandbox = $value['sandbox'];
            unset($value['sandbox']);
        }

        if (array_key_exists('logging', $value)) {
            $this->_usedProperties['logging'] = true;
            $this->logging = new \Symfony\Config\SyliusPayPalPlugin\LoggingConfig($value['logging']);
            unset($value['logging']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['sandbox'])) {
            $output['sandbox'] = $this->sandbox;
        }
        if (isset($this->_usedProperties['logging'])) {
            $output['logging'] = $this->logging->toArray();
        }

        return $output;
    }

}

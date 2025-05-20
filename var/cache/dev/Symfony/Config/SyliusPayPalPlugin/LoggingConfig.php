<?php

namespace Symfony\Config\SyliusPayPalPlugin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LoggingConfig 
{
    private $increased;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function increased($value): static
    {
        $this->_usedProperties['increased'] = true;
        $this->increased = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('increased', $value)) {
            $this->_usedProperties['increased'] = true;
            $this->increased = $value['increased'];
            unset($value['increased']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['increased'])) {
            $output['increased'] = $this->increased;
        }

        return $output;
    }

}

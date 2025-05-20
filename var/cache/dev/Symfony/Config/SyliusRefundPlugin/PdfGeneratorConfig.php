<?php

namespace Symfony\Config\SyliusRefundPlugin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PdfGeneratorConfig 
{
    private $allowedFiles;
    private $enabled;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function allowedFiles(string $name, mixed $value): static
    {
        $this->_usedProperties['allowedFiles'] = true;
        $this->allowedFiles[$name] = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('allowed_files', $value)) {
            $this->_usedProperties['allowedFiles'] = true;
            $this->allowedFiles = $value['allowed_files'];
            unset($value['allowed_files']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowedFiles'])) {
            $output['allowed_files'] = $this->allowedFiles;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }

        return $output;
    }

}

<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusStateMachineAbstractionConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultAdapter;
    private $graphsToAdaptersMapping;
    private $_usedProperties = [];

    /**
     * @default 'winzou_state_machine'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultAdapter($value): static
    {
        $this->_usedProperties['defaultAdapter'] = true;
        $this->defaultAdapter = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function graphsToAdaptersMapping(string $graph_name, mixed $value): static
    {
        $this->_usedProperties['graphsToAdaptersMapping'] = true;
        $this->graphsToAdaptersMapping[$graph_name] = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_state_machine_abstraction';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('default_adapter', $value)) {
            $this->_usedProperties['defaultAdapter'] = true;
            $this->defaultAdapter = $value['default_adapter'];
            unset($value['default_adapter']);
        }

        if (array_key_exists('graphs_to_adapters_mapping', $value)) {
            $this->_usedProperties['graphsToAdaptersMapping'] = true;
            $this->graphsToAdaptersMapping = $value['graphs_to_adapters_mapping'];
            unset($value['graphs_to_adapters_mapping']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultAdapter'])) {
            $output['default_adapter'] = $this->defaultAdapter;
        }
        if (isset($this->_usedProperties['graphsToAdaptersMapping'])) {
            $output['graphs_to_adapters_mapping'] = $this->graphsToAdaptersMapping;
        }

        return $output;
    }

}

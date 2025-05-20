<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusProduct'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusProductConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $driver;
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
     * @default {"product":{"classes":{"model":"Sylius\\Component\\Product\\Model\\Product","interface":"Sylius\\Component\\Product\\Model\\ProductInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductType"},"translation":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductTranslation","interface":"Sylius\\Component\\Product\\Model\\ProductTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType"}}},"product_variant":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductVariant","interface":"Sylius\\Component\\Product\\Model\\ProductVariantInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantType"},"translation":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductVariantTranslation","interface":"Sylius\\Component\\Product\\Model\\ProductVariantTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType"}}},"product_option":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductOption","interface":"Sylius\\Component\\Product\\Model\\ProductOptionInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionType"},"translation":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductOptionTranslation","interface":"Sylius\\Component\\Product\\Model\\ProductOptionTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType"}}},"product_option_value":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductOptionValue","interface":"Sylius\\Component\\Product\\Model\\ProductOptionValueInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueType"},"translation":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductOptionValueTranslation","interface":"Sylius\\Component\\Product\\Model\\ProductOptionValueTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType"}}},"product_association":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductAssociation","interface":"Sylius\\Component\\Product\\Model\\ProductAssociationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationType"}},"product_association_type":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductAssociationType","interface":"Sylius\\Component\\Product\\Model\\ProductAssociationTypeInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\TranslatableFactory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeType"},"translation":{"classes":{"model":"Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslation","interface":"Sylius\\Component\\Product\\Model\\ProductAssociationTypeTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType"}}}}
    */
    public function resources(array $value = []): \Symfony\Config\SyliusProduct\ResourcesConfig
    {
        if (null === $this->resources) {
            $this->_usedProperties['resources'] = true;
            $this->resources = new \Symfony\Config\SyliusProduct\ResourcesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
        }

        return $this->resources;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_product';
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
            $this->resources = new \Symfony\Config\SyliusProduct\ResourcesConfig($value['resources']);
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
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = $this->resources->toArray();
        }

        return $output;
    }

}

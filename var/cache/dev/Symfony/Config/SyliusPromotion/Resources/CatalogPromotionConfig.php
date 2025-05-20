<?php

namespace Symfony\Config\SyliusPromotion\Resources;

require_once __DIR__.\DIRECTORY_SEPARATOR.'CatalogPromotion'.\DIRECTORY_SEPARATOR.'ClassesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'CatalogPromotion'.\DIRECTORY_SEPARATOR.'TranslationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CatalogPromotionConfig 
{
    private $options;
    private $classes;
    private $translation;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function options(mixed $value): static
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;

        return $this;
    }

    /**
     * @default {"model":"Sylius\\Component\\Promotion\\Model\\CatalogPromotion","interface":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\CatalogPromotionType"}
    */
    public function classes(array $value = []): \Symfony\Config\SyliusPromotion\Resources\CatalogPromotion\ClassesConfig
    {
        if (null === $this->classes) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusPromotion\Resources\CatalogPromotion\ClassesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classes()" has already been initialized. You cannot pass values the second time you call classes().');
        }

        return $this->classes;
    }

    /**
     * @default {"classes":{"model":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionTranslation","interface":"Sylius\\Component\\Promotion\\Model\\CatalogPromotionTranslationInterface","controller":"Sylius\\Bundle\\ResourceBundle\\Controller\\ResourceController","factory":"Sylius\\Component\\Resource\\Factory\\Factory","form":"Sylius\\Bundle\\PromotionBundle\\Form\\Type\\CatalogPromotionTranslationType"}}
    */
    public function translation(array $value = []): \Symfony\Config\SyliusPromotion\Resources\CatalogPromotion\TranslationConfig
    {
        if (null === $this->translation) {
            $this->_usedProperties['translation'] = true;
            $this->translation = new \Symfony\Config\SyliusPromotion\Resources\CatalogPromotion\TranslationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "translation()" has already been initialized. You cannot pass values the second time you call translation().');
        }

        return $this->translation;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if (array_key_exists('classes', $value)) {
            $this->_usedProperties['classes'] = true;
            $this->classes = new \Symfony\Config\SyliusPromotion\Resources\CatalogPromotion\ClassesConfig($value['classes']);
            unset($value['classes']);
        }

        if (array_key_exists('translation', $value)) {
            $this->_usedProperties['translation'] = true;
            $this->translation = new \Symfony\Config\SyliusPromotion\Resources\CatalogPromotion\TranslationConfig($value['translation']);
            unset($value['translation']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }
        if (isset($this->_usedProperties['classes'])) {
            $output['classes'] = $this->classes->toArray();
        }
        if (isset($this->_usedProperties['translation'])) {
            $output['translation'] = $this->translation->toArray();
        }

        return $output;
    }

}

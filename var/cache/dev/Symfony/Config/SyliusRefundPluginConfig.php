<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusRefundPlugin'.\DIRECTORY_SEPARATOR.'PdfGeneratorConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SyliusRefundPluginConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $pdfGenerator;
    private $_usedProperties = [];

    /**
     * @default {"allowed_files":[],"enabled":true}
    */
    public function pdfGenerator(array $value = []): \Symfony\Config\SyliusRefundPlugin\PdfGeneratorConfig
    {
        if (null === $this->pdfGenerator) {
            $this->_usedProperties['pdfGenerator'] = true;
            $this->pdfGenerator = new \Symfony\Config\SyliusRefundPlugin\PdfGeneratorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "pdfGenerator()" has already been initialized. You cannot pass values the second time you call pdfGenerator().');
        }

        return $this->pdfGenerator;
    }

    public function getExtensionAlias(): string
    {
        return 'sylius_refund_plugin';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('pdf_generator', $value)) {
            $this->_usedProperties['pdfGenerator'] = true;
            $this->pdfGenerator = new \Symfony\Config\SyliusRefundPlugin\PdfGeneratorConfig($value['pdf_generator']);
            unset($value['pdf_generator']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['pdfGenerator'])) {
            $output['pdf_generator'] = $this->pdfGenerator->toArray();
        }

        return $output;
    }

}

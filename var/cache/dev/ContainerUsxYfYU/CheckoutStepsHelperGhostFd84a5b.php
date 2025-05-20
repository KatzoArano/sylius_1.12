<?php

namespace ContainerUsxYfYU;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Templating/Helper/CheckoutStepsHelper.php';

class CheckoutStepsHelperGhostFd84a5b extends \Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'charset' => [parent::class, 'charset', null, 8],
        "\0".parent::class."\0".'orderPaymentMethodSelectionRequirementChecker' => [parent::class, 'orderPaymentMethodSelectionRequirementChecker', null, 16],
        "\0".parent::class."\0".'orderShippingMethodSelectionRequirementChecker' => [parent::class, 'orderShippingMethodSelectionRequirementChecker', null, 16],
        'charset' => [parent::class, 'charset', null, 8],
        'orderPaymentMethodSelectionRequirementChecker' => [parent::class, 'orderPaymentMethodSelectionRequirementChecker', null, 16],
        'orderShippingMethodSelectionRequirementChecker' => [parent::class, 'orderShippingMethodSelectionRequirementChecker', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CheckoutStepsHelperGhostFd84a5b', false)) {
    \class_alias(__NAMESPACE__.'\\CheckoutStepsHelperGhostFd84a5b', 'CheckoutStepsHelperGhostFd84a5b', false);
}

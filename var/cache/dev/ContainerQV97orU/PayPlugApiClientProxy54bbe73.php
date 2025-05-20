<?php

namespace ContainerQV97orU;
include_once \dirname(__DIR__, 4).'/vendor/payplug/sylius-payplug-plugin/src/ApiClient/PayPlugApiClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payplug/sylius-payplug-plugin/src/ApiClient/PayPlugApiClient.php';

class PayPlugApiClientProxy54bbe73 extends \PayPlug\SyliusPayPlugPlugin\ApiClient\PayPlugApiClient implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cache' => [parent::class, 'cache', null, 16],
        "\0".parent::class."\0".'configuration' => [parent::class, 'configuration', null, 16],
        "\0".parent::class."\0".'factoryName' => [parent::class, 'factoryName', null, 16],
        'cache' => [parent::class, 'cache', null, 16],
        'configuration' => [parent::class, 'configuration', null, 16],
        'factoryName' => [parent::class, 'factoryName', null, 16],
    ];

    public function initialise(string $secretKey): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->initialise(...\func_get_args());
        } else {
            parent::initialise(...\func_get_args());
        }
    }

    public function getAccount(bool $refresh = false): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getAccount(...\func_get_args());
        }

        return parent::getAccount(...\func_get_args());
    }

    public function getGatewayFactoryName(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getGatewayFactoryName(...\func_get_args());
        }

        return parent::getGatewayFactoryName(...\func_get_args());
    }

    public function getPermissions(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPermissions(...\func_get_args());
        }

        return parent::getPermissions(...\func_get_args());
    }

    public function getConfiguration(): \Payplug\Payplug
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getConfiguration(...\func_get_args());
        }

        return parent::getConfiguration(...\func_get_args());
    }

    public function createPayment(array $data): \Payplug\Resource\Payment
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->createPayment(...\func_get_args());
        }

        return parent::createPayment(...\func_get_args());
    }

    public function abortPayment(string $paymentId): \Payplug\Resource\Payment
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->abortPayment(...\func_get_args());
        }

        return parent::abortPayment(...\func_get_args());
    }

    public function refundPayment(string $paymentId): \Payplug\Resource\Refund
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->refundPayment(...\func_get_args());
        }

        return parent::refundPayment(...\func_get_args());
    }

    public function refundPaymentWithAmount(string $paymentId, int $amount, int $refundId): \Payplug\Resource\Refund
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->refundPaymentWithAmount(...\func_get_args());
        }

        return parent::refundPaymentWithAmount(...\func_get_args());
    }

    public function treat(string $input): \Payplug\Resource\IVerifiableAPIResource
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->treat(...\func_get_args());
        }

        return parent::treat(...\func_get_args());
    }

    public function retrieve(string $paymentId): \Payplug\Resource\Payment
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->retrieve(...\func_get_args());
        }

        return parent::retrieve(...\func_get_args());
    }

    public function deleteCard(string $card): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->deleteCard(...\func_get_args());
        } else {
            parent::deleteCard(...\func_get_args());
        }
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PayPlugApiClientProxy54bbe73', false)) {
    \class_alias(__NAMESPACE__.'\\PayPlugApiClientProxy54bbe73', 'PayPlugApiClientProxy54bbe73', false);
}

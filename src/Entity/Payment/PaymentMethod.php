<?php

declare(strict_types=1);

namespace App\Entity\Payment;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\PaymentMethod as BasePaymentMethod;
use Sylius\Component\Payment\Model\PaymentMethodTranslationInterface;
use PayPlug\SyliusPayPlugPlugin\Entity\Traits\PaymentMethodTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_payment_method")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_payment_method')]
class PaymentMethod extends BasePaymentMethod
{
    use PaymentMethodTrait;
    
    protected function createTranslation(): PaymentMethodTranslationInterface
    {
        return new PaymentMethodTranslation();
    }
}

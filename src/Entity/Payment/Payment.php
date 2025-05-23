<?php

declare(strict_types=1);

namespace App\Entity\Payment;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Payment as BasePayment;
use PayPlug\SyliusPayPlugPlugin\Entity\Traits\PaymentTrait;


/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_payment")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_payment')]
class Payment extends BasePayment
{
    use PaymentTrait;
}

<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\PayPalPlugin\Factory;

use Sylius\Bundle\ResourceBundle\Controller\NewResourceFactoryInterface;
use Sylius\Bundle\ResourceBundle\Controller\RequestConfiguration;
use Sylius\Component\Core\Model\PaymentMethodInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\PayPalPlugin\Onboarding\Processor\OnboardingProcessorInterface;
use Sylius\Resource\Factory\FactoryInterface;

final class PayPalPaymentMethodNewResourceFactory implements NewResourceFactoryInterface
{
    private NewResourceFactoryInterface $newResourceFactory;

    private OnboardingProcessorInterface $onboardingProcessor;

    public function __construct(
        NewResourceFactoryInterface $newResourceFactory,
        OnboardingProcessorInterface $onboardingProcessor,
    ) {
        $this->newResourceFactory = $newResourceFactory;
        $this->onboardingProcessor = $onboardingProcessor;
    }

    public function create(RequestConfiguration $requestConfiguration, FactoryInterface $factory): ResourceInterface
    {
        /** @var ResourceInterface $resource */
        $resource = $this->newResourceFactory->create($requestConfiguration, $factory);

        if (!$resource instanceof PaymentMethodInterface) {
            return $resource;
        }

        $request = $requestConfiguration->getRequest();

        if ($this->onboardingProcessor->supports($resource, $request)) {
            return $this->onboardingProcessor->process($resource, $request);
        }

        return $resource;
    }
}

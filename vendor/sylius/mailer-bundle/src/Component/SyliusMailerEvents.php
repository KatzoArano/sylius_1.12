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

namespace Sylius\Component\Mailer;

class SyliusMailerEvents
{
    public const EMAIL_PRE_RENDER = 'sylius.email_rendered';

    public const EMAIL_PRE_SEND = 'sylius.email_send.pre_send';

    public const EMAIL_POST_SEND = 'sylius.email_send.post_send';
}

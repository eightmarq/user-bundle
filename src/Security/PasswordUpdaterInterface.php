<?php

/**
 * This file is part of the EightMarq Symfony bundles.
 *
 * (c) Norbert Schvoy <norbert.schvoy@eightmarq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EightMarq\UserBundle\Security;

use Symfony\Component\Security\Core\User\UserInterface;

interface PasswordUpdaterInterface
{
    public function hashPassword(UserInterface $user, string $plainPassword): void;
}
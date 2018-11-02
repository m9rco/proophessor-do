<?php

/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\ProophessorDo\Container\Model\User;

use Prooph\ProophessorDo\Model\User\Handler\GetAllUsersHandler;
use Prooph\ProophessorDo\Projection\User\UserFinder;
use Psr\Container\ContainerInterface;

class GetAllUsersHandlerFactory
{
    public function __invoke(ContainerInterface $container): GetAllUsersHandler
    {
        return new GetAllUsersHandler($container->get(UserFinder::class));
    }
}

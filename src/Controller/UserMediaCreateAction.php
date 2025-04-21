<?php

declare(strict_types=1);

namespace App\Controller;

use App\Component\User\UserManager;
use App\Component\User\UserMediaFactory;
use App\Controller\Base\AbstractController;
use App\Entity\User;
/**
 * Class UserMediaCreateAction
 *
 * @package App\Controller
 */
class UserMediaCreateAction extends AbstractController
{
    public function __invoke(User $data, UserMediaFactory $mediaFactory,UserManager $userManager): User
    {
        $this->validate($data);

        $user = $mediaFactory->create(
            $data->getEmail(),
            $data->getFullName(),
            $data->getPicture(),
            $data->getClerkId()
        );
        $userManager->save($user, true);

        return $user;
    }
}
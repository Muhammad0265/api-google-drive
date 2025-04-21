<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use App\Entity\UserImageMediaObject;
use DateTime;

class UserMediaFactory
{
    public function create(
        string $email,
        string $fullName,
        string $clerkId,
        string $picture
    ): User
    {
        $user = new User();
        $user->setEmail($email);
        $user->setCreatedAt(new DateTime());
        $user->setPassword('muhammad1014A');
        $user->setFullName($fullName);
        $user->setClerkId($clerkId);
        $user->setPicture($picture);

        return $user;
    }
}
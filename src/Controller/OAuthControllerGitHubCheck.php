<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class OAuthControllerGitHubCheck extends AbstractController
{
    /**
     * @Route("/api/login/github/check", name="github_check")
     */
    public function checkAction(TokenStorageInterface $tokenStorage)
    {
        $user = $tokenStorage->getToken()->getUser();
        // Foydalanuvchi ma'lumotlarini olish va saqlash
        return $this->json(['user' => $user]);
    }
}
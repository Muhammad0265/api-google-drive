<?php

declare(strict_types=1);

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\Provider\GitHubClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OAuthControllerGithub extends AbstractController
{
    /**
     * @Route("/api/login/github", name="github_login")
     */
    public function loginAction(GitHubClient $client)
    {
        return $client->redirect();
    }

}
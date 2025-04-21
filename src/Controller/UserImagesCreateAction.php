<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\UserImageMediaObject;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class UserImagesCreateAction extends AbstractController
{
    public function __invoke(Request $request): UserImageMediaObject
    {
        $uploadedFile = $request->files->get( "file");
        if(!$uploadedFile){
            throw new BadRequestHttpException('file" is required');
        }
        $userImagesMediaObject = new UserImageMediaObject();
        $userImagesMediaObject->file = $uploadedFile;
        return $userImagesMediaObject;
    }
}
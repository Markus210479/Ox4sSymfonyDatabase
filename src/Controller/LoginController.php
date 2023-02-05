<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {        
        $formAction = '';
        $formMethod = 'post';
        $buttonContent = 'Start';
        $formFields = [
            ['name' => 'Email', 'input' => '', 'isValidStr' => '', 'feedbackMsg' => ''],
            ['name' => 'Passwort', 'input' => '', 'isValidStr' => '', 'feedbackMsg' => '']
        ];

        return $this->render('login/login.html.twig', [
            'formAction' => $formAction,
            'formMethod' => $formMethod,
            'buttonContent' => $buttonContent,
            'formFields' => $formFields
            ]);
    }
}
?>
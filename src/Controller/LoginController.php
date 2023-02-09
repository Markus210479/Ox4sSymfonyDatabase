<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\Type\LoginType;
use PHPUnit\Util\Xml\Validator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class LoginController extends AbstractController
{
    private const VALID = '';
    private const INVALID = ' is-invalid ';

    #[Route('/login', name: 'app_login')]
    public function login(Request $request): Response
    {        
        $user = new User();
        // $user->setEmail('');
        // $user->setPassword('');    

        $form = $this->createForm(LoginType::class, $user);
       
        $form->handleRequest($request);
        // if ($form->isSubmitted() && count($validator->validate($user)) == 0) {
        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            return $this->redirectToRoute('task_success');
        }



        return $this->render('login/login.html.twig', ['loginForm' => $form]);

        // $formAction = '/login/validate';
        // $formMethod = 'post';
        // $buttonContent = 'Start';
        // $formFields = [
        //     ['name' => 'Email', 'input' => '', 'isValidStr' => '', 'feedbackMsg' => ''],
        //     ['name' => 'Passwort', 'input' => '', 'isValidStr' => '', 'feedbackMsg' => '']
        // ];

        // return $this->render('login/login.html.twig', [
        //     'formAction' => $formAction,
        //     'formMethod' => $formMethod,
        //     'buttonContent' => $buttonContent,
        //     'formFields' => $formFields
        //     ]);
    }

    // #[Route('/login/validate', name: 'app_validatelogin')]
    // public function validate(ValidatorInterface $validator): Response
    // {        
    //     $user = new User();
    //     $errorStr = '';
    //     $validStr = '';

    //     dd($_POST);
    //     $user->setEmail($_POST['Email']);
    //     $user->setPassword($_POST['Passwort']);
    //     $errors = $validator->validate($user);

    //     if(count($errors) > 0)
    //     {
    //         $errorStr = $errors[0]->getMessage();
    //         $validStr = self::INVALID;
    //     }

    //     $formAction = '';
    //     $formMethod = 'post';
    //     $buttonContent = 'Start';
    //     $formFields = [
    //         ['name' => 'Email', 'input' => $user->getEmail(), 'isValidStr' => $validStr, 'feedbackMsg' => $errorStr],
    //         ['name' => 'Passwort', 'input' => $user->getPassword(), 'isValidStr' => $validStr, 'feedbackMsg' => $errorStr]
    //     ];

    //     return $this->render('login/login.html.twig', [
    //         'formAction' => $formAction,
    //         'formMethod' => $formMethod,
    //         'buttonContent' => $buttonContent,
    //         'formFields' => $formFields
    //         ]);
    // }
}
?>
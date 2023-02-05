<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StartController extends AbstractController
{
    #[Route('/start', name: 'app_start', methods: ['GET'])]
    public function number(): Response
    {
        $buttons = [
            ['path' => 'app_bauteildaten', 'content' => 'Artikeldaten'],
            ['path' => 'app_servicedaten', 'content' => 'Servicedaten'],
            ['path' => 'app_bauteildaten', 'content' => 'Baugruppen'],
            ['path' => 'app_bauteildaten', 'content' => 'Passwort ändern']
        ];

        return $this->render('start/start.html.twig', ['buttons' => $buttons]);
    }
}
?>
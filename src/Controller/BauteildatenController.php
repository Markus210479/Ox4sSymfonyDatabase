<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BauteildatenController extends AbstractController
{
    #[Route('/bauteildaten', name: 'app_bauteildaten')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('tabellendaten/bauteildaten.html.twig', [$number]);
    }
}
?>
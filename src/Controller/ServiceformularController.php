<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ServiceformularController extends AbstractController
{
    #[Route('/serviceformular', name: 'app_serviceformular')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('formulare/serviceformular.html.twig', [$number]);
    }
}
?>
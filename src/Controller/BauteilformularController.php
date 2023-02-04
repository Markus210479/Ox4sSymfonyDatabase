<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BauteilformularController extends AbstractController
{
    #[Route('/bauteilformular', name: 'app_bauteilformular')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('formulare/bauteilformular.html.twig', [$number]);
    }
}
?>
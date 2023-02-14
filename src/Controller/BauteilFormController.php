<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Entity\BauteilForm;
use App\Form\Type\BauteilFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;

class BauteilFormController extends AbstractController
{
    #[Route('/bauteilform', name: 'app_bauteilform')]
    public function bauteilForm(Request $request): Response
    {
        $bauteilForm = new BauteilForm();

        $form = $this->createForm(BauteilFormType::class, $bauteilForm, [
            'method' => 'POST',
            'attr' => ['id' => 'bauteilForm']
        ]);
        $form->handleRequest($request);
// dd($form);

        if ($form->isSubmitted() && $form->isValid()) {

            $form = $form->getData();

            // return $this->redirectToRoute('task_success');
        }

        return $this->render('formulare/bauteilformular.html.twig', [
            'bauteilForm' => $form, 
            'formId' => 'bauteilForm'
        ]);

    }
}
?>
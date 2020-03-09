<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        $form = $this ->createForm(ContactformulierType::class);

       return $this->render('contact/index.html.twig', [
       'our_form' => $form->createView(),
       ]);

    }


}

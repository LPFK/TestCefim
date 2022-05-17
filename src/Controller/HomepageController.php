<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InputAppType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'app_homepage', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        $user = new User();
        $form = $this->createForm(InputAppType::class, $user );

        return $this->render('homepage/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
     
}



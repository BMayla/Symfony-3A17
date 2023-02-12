<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    #[Route('/formation/{nom_f}', name: 'detail_formation')]
    public function detail($nom_f)
    {
        return $this->render('formation/detail.html.twig', [
            'formation_nom' => $nom_f,
        ]);
    }
}
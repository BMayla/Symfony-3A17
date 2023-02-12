<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    #[Route('/club', name: 'app_club')]
    public function index(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

    #[Route("/club/getname/{nom}", name: "club_getname")]
    public function getName($nom)
    {
        return $this->render('/club/detail.html.twig', ['nom' => $nom]);
    }

    #[Route("/club/list", name: "club_list")]
    public function list()
    {
        $formations = [
            [
                'ref' => 'form147',
                'Titre' => 'Formation Symfony 4',
                'Description' => 'formation pratique',
                'date_debut' => '12/06/2020',
                'date_fin' => '19/06/2020',
                'nb_participants' => 19,    
            ],
            [
                'ref' => 'form177',
                'Titre' => 'Formation SOA',
                'Description' => 'formation theorique',
                'date_debut' => '03/12/2020',
                'date_fin' => '10/12/2020',
                'nb_participants' => 0,
            ],
            [
                'ref' => 'form178',
                'Titre' => 'Formation Angular',
                'Description' => 'formation theorique',
                'date_debut' => '10/06/2020',
                'date_fin' => '14/06/2020',
                'nb_participants' => 12,
            ],
        ];

        return $this->render('club/list.html.twig', ['formations' => $formations]);
    }
}

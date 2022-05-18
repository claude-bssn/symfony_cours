<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/exo',
    name: 'exo_')]
class ExoController extends AbstractController
{
    #[Route('/{name}', 
    name: 'app_exo',
    methods: ['GET'])]
    public function app_exo($name): Response
    {
        return $this->render('exo/index.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/numero/{numSecu}', 
    name: 'numSecuSoc',
    methods: ['GET'],
    requirements: [
        'numSecu' => '\d+',
    ],

    )]
    public function numSecuSoc(int $numSecu): Response
    {
        return $this->render('exo/index.html.twig', [
            'numSecu' => $numSecu,
        ]);
    }

    #[Route('/alpha/tab',
    name: 'tableauAlpha',
    )]
    public function tableauAlpha(): Response
    {
        $alpha = 'qwertyuiopasdfghjklzxcvbnm';
        $tabAlpha = str_split($alpha);
        sort($tabAlpha);
        // var_dump($tabAlpha);

        return $this->render('exo/tableau.html.twig',
        [
            'tabAlpha'=>$tabAlpha,
        ]);
    }

}

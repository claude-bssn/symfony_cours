<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExoController extends AbstractController
{
    #[Route('/exo/{name}', 
    name: 'app_exo',
    methods: ['GET'])]
    public function app_exo($name): Response
    {
        return $this->render('exo/index.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/exo/numero/{numSecu}', 
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

    #[Route('exo/alpha/tab',
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

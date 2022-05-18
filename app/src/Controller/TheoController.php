<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TheoController extends AbstractController {

    #[Route('/theo/{data}',
        name: 'indexTheo',
        methods: ['GET'],
    )]
    public function indexTheo(
        $data
    )
    : Response {
       

        // $params = array(
        //     'bonjour' => "Bonjour Theo",
        //     "name" => $data["name"],
        //     "firstName" => $data["firstName"],
            
        // );
        return $this->render(
            'theo/index.html.twig',
            array('data' => $data)
        );
    }
}
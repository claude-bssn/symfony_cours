<?php

namespace App\Controller;

use App\Repository\QuoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class QuoteController extends AbstractController {

    #[Route('/', name: 'index')]
    public function index(
        QuoteRepository $quoteRepository
    )
    : Response|RedirectResponse
    {
        $url = $this->generateUrl(
            'exo_app_exo',
            ['name' => 'Morue'],
            UrlGeneratorInterface::ABSOLUTE_PATH
        );
        // return $this->redirect($url);
        return $this->render(
            'quote/index.html.twig',
            [
                'quotes' => $quoteRepository->findAll(),
            ]
        );
    }
}
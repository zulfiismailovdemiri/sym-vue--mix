<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return $this->render('home.html.twig', []);
    }

    /**
     * @Route("/{slug}")
     */
    public function page($slug): Response
    {
        $list = [
            'Kaffee',
            'Zucker',
            'Milch',
            'Kuchen'
        ];

        dump($this);

        return $this->render('page/default.html.twig', [
            'page' => ucwords(str_replace('-', ' ', $slug)),
            'list' => $list,
        ]);
    }

}
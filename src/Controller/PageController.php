<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return new Response('Hallo :-)');
    }

    /**
     * @Route("/{slug}")
     */
    public function page($slug): Response
    {
        return new Response(sprintf(
            'about "%s"',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }

}
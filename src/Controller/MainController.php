<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('<strong>Bog neka te čuva moj Leonardo</strong>');
    }
}

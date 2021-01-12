<?php
namespace App\Controller\API;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/schemes/")
 */
class SchemesController
{
    /**
     * @Route(name="api.schemes.index", methods={"GET"})
     */
    public function index(): Response
    {
        return new Response('ok', 200);
    }
}
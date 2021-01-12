<?php
namespace App\Controller\API;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/places/")
 */
class PlacesController extends ApiControllerBase
{
    public function __construct()
    {
        parent::__construct('PlacesRepository');
    }

    /**
     * @Route(name="api.places.index", methods={"GET"})
     */
    public function index(): Response
    {
        return new JsonResponse($this->repository->getItems()->toArray());
    }
}

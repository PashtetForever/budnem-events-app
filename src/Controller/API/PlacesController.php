<?php
namespace App\Controller\API;

use App\Repositories\Stub\PlacesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/places/")
 */
class PlacesController extends AbstractController
{
    private PlacesRepository $placesRepository;

    public function __construct(PlacesRepository $placesRepository)
    {
        $this->placesRepository = $placesRepository;
    }

    /**
     * @Route(name="api.places.index", methods={"GET"})
     */
    public function index(): Response
    {
        return new JsonResponse($this->placesRepository->getItems()->toArray());
    }
}

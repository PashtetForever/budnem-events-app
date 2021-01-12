<?php

namespace App\Controller\API;

use App\Repositories\Stub\RegionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/regions/")
 */
class RegionsController extends AbstractController
{
    private RegionsRepository $regionsRepository;

    public function __construct(RegionsRepository $regionsRepository)
    {
        $this->regionsRepository = $regionsRepository;
    }

    /**
     * @Route(name="api.regions.index", methods={"GET"})
     */
    public function index(): Response
    {
        return new JsonResponse($this->regionsRepository->getItems()->toArray());
    }
}

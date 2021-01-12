<?php

namespace App\Controller\API;

use App\Repositories\Stub\SectionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/sections/")
 */
class SectionsController extends AbstractController
{
    private SectionsRepository $sectionsRepository;

    public function __construct(SectionsRepository $sectionsRepository)
    {
        $this->sectionsRepository = $sectionsRepository;
    }

    /**
     * @Route(name="api.sections.index", methods={"GET"})
     */
    public function index(): Response
    {
        return new JsonResponse($this->sectionsRepository->getItems()->toArray());
    }
}

<?php

namespace App\Controller\API;

use App\Repositories\FactoryRepository;
use App\Repositories\RepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class ApiControllerBase extends AbstractController
{
    protected RepositoryInterface $repository;

    public function __construct(string $repositoryClassName)
    {
        $this->repository = FactoryRepository::create($repositoryClassName, true);
    }
}

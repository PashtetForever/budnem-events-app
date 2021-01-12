<?php


namespace App\Repositories;


class FactoryRepository
{
    const DEVELOP_REPOSITORY_NAMESPACE = 'App\\Repositories\\Stub\\';
    const PRODUCTION_REPOSITORY_NAMESPACE = 'App\\Repositories\\';

    public static function create(string $className, bool $debugMode): RepositoryInterface
    {
        if($debugMode){
            $repository = self::DEVELOP_REPOSITORY_NAMESPACE . $className;
            return new $repository();
        } else {
            $repository = self::PRODUCTION_REPOSITORY_NAMESPACE . $className;
            return new $repository();
        }
    }
}

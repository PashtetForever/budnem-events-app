<?php

namespace App\Repositories;

use App\Services\BitrixModels\Region;

class RegionsRepository extends Repository
{
    public function __construct()
    {
        $regions = Region::select(['ID', 'NAME'])->getList();
        parent::__construct($regions);
    }
}

<?php

namespace App\Repositories\Stub;

use App\Repositories\Repository;
use Illuminate\Support\Collection;

class RegionsRepository extends Repository
{
    public function __construct()
    {
        $collection = new Collection(json_decode('{
    "158056": {
        "ID": "158056",
        "NAME": "Иваново",
        "IBLOCK_ID": "27",
        "SORT": "500"
    },
    "160183": {
        "ID": "160183",
        "NAME": "Тамбов",
        "IBLOCK_ID": "27",
        "SORT": "500"
    },
    "547": {
        "ID": "547",
        "NAME": "Севастополь",
        "IBLOCK_ID": "27",
        "SORT": "500"
    }}', true));

        parent::__construct($collection);
    }
}

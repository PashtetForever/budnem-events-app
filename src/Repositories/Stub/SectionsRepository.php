<?php

namespace App\Repositories\Stub;

use App\Repositories\Repository;
use Illuminate\Support\Collection;

class SectionsRepository extends Repository
{
    public function __construct()
    {
        $collection = new Collection(json_decode('{
    "226": {
        "ID": "226",
        "IBLOCK_ID": "43",
        "NAME": "Концерты",
        "SORT": "10"
    },
    "229": {
        "ID": "229",
        "IBLOCK_ID": "43",
        "NAME": "Театры",
        "SORT": "20"
    },
    "230": {
        "ID": "230",
        "IBLOCK_ID": "43",
        "NAME": "Вечеринки",
        "SORT": "30"
    },
    "231": {
        "ID": "231",
        "IBLOCK_ID": "43",
        "NAME": "Фестивали",
        "SORT": "40"
    },
    "237": {
        "ID": "237",
        "IBLOCK_ID": "43",
        "NAME": "Музеи",
        "SORT": "500"
    },
    "236": {
        "ID": "236",
        "IBLOCK_ID": "43",
        "NAME": "Балет",
        "SORT": "500"
    },
    "235": {
        "ID": "235",
        "IBLOCK_ID": "43",
        "NAME": "Выставки",
        "SORT": "500"
    },
    "234": {
        "ID": "234",
        "IBLOCK_ID": "43",
        "NAME": "Спорт",
        "SORT": "500"
    },
    "233": {
        "ID": "233",
        "IBLOCK_ID": "43",
        "NAME": "Детям",
        "SORT": "500"
    }}', true));

        parent::__construct($collection);
    }
}

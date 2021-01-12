<?php


namespace App\Repositories\Stub;


use App\Repositories\Repository;
use Illuminate\Support\Collection;

class SchemesRepository extends Repository
{
    public function __construct()
    {
        $collection = new Collection(json_decode('{"159823": {
        "ID": "159823",
        "IBLOCK_ID": "52",
        "PROPERTY_SCHEMA_VALUE": "14491",
        "PROPERTY_SCHEMA_VALUE_ID": "159823:558",
        "PROPERTY_PLACE_VALUE": "162775",
        "PROPERTY_PLACE_VALUE_ID": "159823:557",
        "SORT": "500",
        "SCHEMA_SRC": "https://budnyam.net/upload/iblock/ac2/ac2fe3ab35f0b9d980db48bd221ef6fa.svg"
    },
    "159855": {
        "ID": "159855",
        "IBLOCK_ID": "52",
        "PROPERTY_SCHEMA_VALUE": "14523",
        "PROPERTY_SCHEMA_VALUE_ID": "159855:558",
        "PROPERTY_PLACE_VALUE": "162775",
        "PROPERTY_PLACE_VALUE_ID": "159855:557",
        "SORT": "500",
        "SCHEMA_SRC": "https://budnyam.net/upload/iblock/c6a/c6af8dc5040a3e14c4a1d689ced3d802.svg"
    }}', true));

        parent::__construct($collection);
    }
}

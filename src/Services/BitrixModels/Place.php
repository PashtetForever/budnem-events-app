<?php


namespace App\Services\BitrixModels;


use Arrilot\BitrixModels\Models\ElementModel;

class Place extends ElementModel
{
    const IBLOCK_ID = 51;

    public function region()
    {
        return $this->hasOne(Region::class, 'ID', 'PROPERTY_LINK_REGION_VALUE');
    }
}

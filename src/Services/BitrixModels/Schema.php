<?php

namespace App\Services\BitrixModels;

use Arrilot\BitrixModels\Models\ElementModel;

class Schema extends ElementModel
{
    const IBLOCK_ID = 52;

    public function place()
    {
        return $this->hasOne(Place::class, 'ID', 'PROPERTY_PLACE_VALUE');
    }
}

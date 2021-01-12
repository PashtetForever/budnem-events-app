<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

abstract class Repository implements RepositoryInterface
{
    protected Collection $items;

    public function __construct(Collection $collection)
    {
        $this->items = $collection;
    }

    public function getItemByField($fieldName, $value)
    {
        return $this->items->where($fieldName, '=', $value)->first();
    }

    public function getItemsByField($fieldName, $value): Collection
    {
        return $this->items->where($fieldName, '=', $value);
    }

    public function getItems(): Collection
    {
        return $this->items;
    }
}

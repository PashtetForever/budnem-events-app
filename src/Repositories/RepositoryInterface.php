<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function getItems(): Collection;
    public function getItemByField($fieldName, $value);
    public function getItemsByField($fieldName, $value): Collection;
}

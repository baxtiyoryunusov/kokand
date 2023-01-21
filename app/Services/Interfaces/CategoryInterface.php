<?php
namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface CategoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

}

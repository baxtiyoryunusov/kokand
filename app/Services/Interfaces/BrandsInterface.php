<?php
namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface BrandsInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

}

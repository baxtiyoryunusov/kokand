<?php
namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface ProductInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

}

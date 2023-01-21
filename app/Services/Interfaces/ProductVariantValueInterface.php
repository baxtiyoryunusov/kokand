<?php
namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface ProductVariantValueInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

}

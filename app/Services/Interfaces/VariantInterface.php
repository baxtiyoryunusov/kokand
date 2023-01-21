<?php
namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface VariantInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

}

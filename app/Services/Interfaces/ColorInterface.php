<?php
namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface ColorInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

}

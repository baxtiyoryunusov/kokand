<?php
namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface CommonSetingsInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

}

<?php
namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface XususiyatInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

}

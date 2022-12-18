<?php

namespace App\Servises;

use App\Repositories\ProductRepository;

class ProductServis
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function all()
    {
        return $this->productRepository->all();
    }

    public function store($request)
    {
        return $this->productRepository->store($request);
    }

    public function deleteAll($request)
    {
        return $this->productRepository->deleteAll($request);
    }

    public function delete($request)
    {
        return $this->productRepository->delete($request);
    }

    public function checkStatus($request)
    {
        return $this->productRepository->checkStatus($request);
    }
}

<?php

namespace App\Repositories;
use App\Models\Product as Model;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ProductRepository extends CoreRepository
{
    final public function __construct()
    {
        parent::__construct();
    }

    final protected function getModelClass(): string
    {
        return Model::class;
    }

    final public function getAll()
    {
        return $this->model->get();
    }

}

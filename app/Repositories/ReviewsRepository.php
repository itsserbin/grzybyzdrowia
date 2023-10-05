<?php

namespace App\Repositories;
use App\Models\Reviews as Model;

class ReviewsRepository extends CoreRepository
{
    final public function __construct()
    {
        parent::__construct();
    }

    protected function getModelClass()
    {
        return Model::class;
    }

    final public function getAll()
    {
        return $this->model->get();
    }
}

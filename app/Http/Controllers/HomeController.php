<?php

namespace App\Http\Controllers;

use App\Repositories\{ ProductRepository,ReviewsRepository };
use Illuminate\Http\Request;
use Inertia\Inertia;
class HomeController extends Controller
{
    protected ProductRepository $productRepository;
    protected ReviewsRepository $reviewsRepository;
    final public function __construct
    (
        ProductRepository $productRepository,
        ReviewsRepository $reviewsRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->reviewsRepository = $reviewsRepository;
    }
    final public function index(): \Inertia\Response
    {
        return Inertia::render('App/App',[
            'products' => $this->productRepository->getAll(),
            'reviews' => $this->reviewsRepository->getAll()
        ]);
    }
}

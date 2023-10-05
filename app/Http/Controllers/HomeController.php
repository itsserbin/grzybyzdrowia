<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;
class HomeController extends Controller
{
    protected ProductRepository $productRepository;
    final public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    final public function index(): \Inertia\Response
    {
        return Inertia::render('Pages/App',[
            'products'=>$this->productRepository->getAll(),
        ]);
    }
}

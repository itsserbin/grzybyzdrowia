<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class HomeController extends Controller
{
    final public function index()
    {
        $test = 1;
        return Inertia::render('Pages/App',[
            'test'=>$test,
        ]);
    }
}

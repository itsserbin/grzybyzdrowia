<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function show($page)
    {
        return Inertia::render("App/Pages/Static/{$page}");
    }
}

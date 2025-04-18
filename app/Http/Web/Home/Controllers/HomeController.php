<?php

namespace App\Http\Web\Home\Controllers;

use App\Http\Web\Controllers\Controller;
use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::with('image')->get();
        return view('home.index', compact('cars'));
    }
    public function show($id)
    {
        $car = Car::with('image')->findOrFail($id);
        return view('home.show', compact('car'));
    }
}

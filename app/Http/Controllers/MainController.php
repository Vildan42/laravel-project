<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }
}

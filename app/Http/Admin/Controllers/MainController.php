<?php

namespace App\Http\Admin\Controllers;

use App\Http\Web\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}

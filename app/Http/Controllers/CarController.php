<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin/cars/index', compact('cars'));
    }
    public function create()
    {
        return view('admin/cars/create');
    }
    public function store()
    {
        $data = request()->validate([
            'model' => 'required|string',
            'company' => 'required|string',
            'weight' => 'integer',
            'image' => 'string',
        ]);
        Car::create($data);
        return redirect()->route('cars.index');
    }
    public function show(Car $car)
    {
        return view('admin/cars/show', compact('car'));
    }
    public function edit(Car $car)
    {
        return view('admin/cars/edit', compact('car'));
    }
    public function update(Car $car)
    {
        $data = request()->validate([
            'model' => 'required|string',
            'company' => 'required|string',
            'weight' => 'integer',
            'image' => 'string',
        ]);
        $car->update($data);
        return redirect()->route('cars.index');
    }
  public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }

}

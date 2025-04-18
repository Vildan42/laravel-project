<?php

namespace App\Http\Admin\Controllers;

use App\Http\Web\Controllers\Controller;
use App\Models\Car;
use App\Http\Admin\Services\CarService;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct(protected CarService $carService) {}

    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'model'    => 'required|string',
            'company'  => 'required|string',
            'weight'   => 'integer',
            'image_id' => 'nullable|integer',
        ]);

        $car = new Car();
        $this->carService->save($car, $data);
        $this->carService->notificationAboutCreat($car);

        return redirect()->route('cars.index');
    }

    public function show(Car $car)
    {
        return view('admin.cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Car $car, Request $request)
    {
        $data = $request->validate([
            'model'    => 'required|string',
            'company'  => 'required|string',
            'weight'   => 'integer',
            'image_id' => 'nullable|integer',
        ]);

        $this->carService->save($car, $data);

        return redirect()->route('cars.index');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }
}

<?php

namespace App\Http\Admin\Services;

use App\Http\Admin\Controllers\NewCarNotification;
use App\Models\Car;
use Illuminate\Support\Facades\Notification;


class CarService
{
    public function save(Car $car, array $data): Car
    {
        $car->model = data_get($data, 'model');
        $car->company = data_get($data, 'company');
        $car->weight = data_get($data, 'weight');
        $car->image_id = data_get($data, 'image_id');
        $car->save();

        return $car;
    }

    public function notificationAboutCreat(Car $car): void
    {
        Notification::route('telegram', env('TELEGRAM_CHAT_ID'))
            ->notify(new NewCarNotification($car));
    }
}

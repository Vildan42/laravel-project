<?php

namespace App\Http\Admin\Controllers;

use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;

class NewCarNotification extends Notification
{
    protected $car;

    public function __construct($car)
    {
        $this->car = $car;
    }

    public function via($notifiable)
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to(env('TELEGRAM_CHAT_ID'))
            ->content("*Добавлен новый автомобиль!* 🚗")
            ->line("*Модель:* {$this->car->model}")
            ->line("*Марка:* {$this->car->company}")
            ->line("*Вес:* {$this->car->weight} кг")
            ->button('Подробнее', url("/admin/cars/{$this->car->id}"));
    }
}

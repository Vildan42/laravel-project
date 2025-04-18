<?php

namespace App\Models;

use App\Http\Admin\Controllers\NewCarNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;

/**
 * @property int|null $model
 * @property int|null $company
 * @property int|null $weight
 * @property int|null $image_id
 */
class Car extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}

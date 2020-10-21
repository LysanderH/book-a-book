<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Book extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function collection()
    {
        return $this->belongsToMany(Collection::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function price()
    {
        return $this->hasMany(Price::class);
    }
}

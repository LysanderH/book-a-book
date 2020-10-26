<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Book extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function seasons()
    {
        return $this->belongsToMany(Season::class);
    }

    public function categories()
    {
        return $this->hasOne(Category::class);
    }

    public function bacs(){
        return $this->hasOne(Bac::class);
    }

}

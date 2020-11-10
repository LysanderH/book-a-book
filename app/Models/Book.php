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
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function seasons()
    {
        return $this->belongsToMany(Season::class)->withPivot('price', 'public_price');
    }

    public function getCurrentSeasonAttribute()
    {
        // Récupérer la saison courante / Season -> current

        $currentSeason = Season::latest()->first();

        return $this->seasons->where('id', $currentSeason->id)->first();
    }
}

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
        return $this->seasons->sortBy('created_at')->first();
    }

    public function getNumberOfOrdersAttribute()
    {
        return $this->orders->sum(function ($order) {
            return $order->pivot->quantity;
        });
    }

    public function getCurrentPriceAttribute()
    {
        return $this->current_season->pivot->price;
    }

    public function scopeWithBookQuantity($query)
    {
        $query->addSelect([
            'ordered_books_quantity' => BookOrder::select('quantity')->first()
            // BookOrder::selectRaw('MAX(quantity)')
            //     ->where('book_id', 'books.id')
            //     ->groupBy('book_id')
            //     ->first()
        ]);
    }
}

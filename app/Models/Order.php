<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total', 'draft'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class)->withTimestamps();
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class)->withPivot('quantity');
    }


    /**
     * getTotalAttribute calculates the total of an order
     * 
     * note :
     * $total = price(from order season) * quantity of books
     *
     * @return int $total
     */
    public function getCalculatedTotalAttribute()
    {
        // TODO optimise to get less queries
        // $books = $this->books;
        // $total = 0;

        // foreach ($books as $book) {
        //     $total = $total + ($book->seasons->where('id', $this->season()->first()->id)->first()->pivot->price * $book->pivot->quantity);
        // };

        // In Datenbank abspeichern

        return number_format($this->books->sum(function ($book) {
            return $book->current_season->pivot->price * $book->pivot->quantity;
        }), 2, ',', ' ') . '€';

        // return number_format($total, 2, ',', ' ') . '€';
    }
}

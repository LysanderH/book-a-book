<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function statusChanges()
    {
        return $this->hasMany(StatusChange::class);
    }

    public function season()
    {
        return $this->hasOne(Season::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusChange extends Model
{
    use HasFactory;

    public function statuses()
    {
        return $this->hasOne(Status::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = ['id'];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function rsvp()
    {
        return $this->hasOne(GuestRsvp::class);
    }

    public function foodOptions()
    {
        return $this->hasOne(GuestFoodOption::class);
    }
}

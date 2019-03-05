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
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestFoodOption extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
      'wedding_selection' => 'json',
        'rehearsal_selection' => 'json'
    ];

    public function guest() {
        return $this->belongsTo(Guest::class);
    }
}

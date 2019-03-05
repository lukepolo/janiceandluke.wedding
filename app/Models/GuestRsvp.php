<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestRsvp extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'attending' => 'boolean',
        'attending_rehearsal_dinner' => 'boolean'
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}

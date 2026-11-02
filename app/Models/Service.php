<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'active',
    ];

    /**
     * A service can have many bookings.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
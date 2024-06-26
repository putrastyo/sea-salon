<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration'
    ];

    // RELATION
    public function branch() {
        return $this->hasMany(Branch::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

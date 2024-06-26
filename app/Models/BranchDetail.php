<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // RELATION
    public function branch() {
        return $this->belongsTo(Branch::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
}

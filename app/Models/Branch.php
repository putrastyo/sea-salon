<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // RELATION
    public function branchDetails() {
        return $this->hasMany(BranchDetail::class);
    }
}

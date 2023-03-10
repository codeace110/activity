<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Membership model




class Membership extends Model
{
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}

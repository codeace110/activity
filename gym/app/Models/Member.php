<?php

namespace App\Models;
use\Eloquent\Model;

// Member model
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{


    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}




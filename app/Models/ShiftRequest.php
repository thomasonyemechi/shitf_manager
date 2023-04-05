<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftRequest extends Model
{
    use HasFactory;


    protected $guarded;

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function shift()
    {
        return $this->belongsTo(Shift::class);
    }

     
}

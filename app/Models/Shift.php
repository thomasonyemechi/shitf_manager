<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $guarded;

    function createdby()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    function request()
    {
        return $this->hasMany(ShiftRequest::class);
    }

    function approved() {
        return $this->hasMany(ShiftRequest::class)->where('status', 'approved');
    }

    function pending() {
        return $this->hasMany(ShiftRequest::class)->where('status', 'pending');
    }

    function completed() {
        return $this->hasMany(ShiftRequest::class)->where('status', 'completed');
    }

    function rejected()
    {
        return $this->hasMany(ShiftRequest::class)->where('status', 'rejected');
    }

}

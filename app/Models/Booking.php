<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time_slot',
        'duration',
        'client_name',
        'client_email',
        'client_phone',
        'status'
    ];
}

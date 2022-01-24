<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname',
        'firstname',
        'middlename',
        'birthdate',
        'age',
        'street',
        'city',
        'postal',
        'phone_number',
        'mobile_number',
        'email',
        'emergency_name',
        'emergency_number',
        'emergency_relationship'
    ];
}

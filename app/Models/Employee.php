<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    Protected $fillable=[
        'name',
        'mobile',
        'email',
        'city',
        'role',
    ];
}

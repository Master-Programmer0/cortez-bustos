<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BSIT extends Model
{
    use HasFactory;

    protected $table = 'employees_table'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'address',
        'country',
        'state',
        'city',
        'zip',
        'age',
        'birthday',
        'hire_date',
        'department',
        'division',
        'phone',
    ];

    protected $dates = [
        'birthday',
        'hire_date',
    ];
}
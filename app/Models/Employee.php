<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'date_of_birth'
    ];

    public static $rules = [
        'name'  => 'required|string',
        'email' => 'required|email|unique:employees, email',
        'phone' => 'nullable|string',
        'date_of_birth' => 'nullable|date',
    ];
}

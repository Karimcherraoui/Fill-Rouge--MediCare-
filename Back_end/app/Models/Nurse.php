<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'date_of_birth',
        'gender',
        'phone',
        'statut',


    ];

    public static function getNurseByEmail($email)
{
    return self::where('email', $email)->first();
}   



   
}

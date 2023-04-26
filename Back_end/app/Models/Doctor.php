<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Doctor extends Model
{
    use HasFactory , HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'phone',
        'date_of_birth',

        'speciality',
        'address',
        'statut',
    ];

    public static function getDoctorBySpeciality($speciality)
    {
        return self::where('speciality', $speciality)->get();
    }   

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
  
}

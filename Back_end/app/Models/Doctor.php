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

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function appointments()
    {
        return $this->hasManyThrough(Appointment::class, MedicalRecord::class);
    }
}

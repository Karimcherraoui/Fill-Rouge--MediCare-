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
        'adress',
        'gender',
        'phone_number',
        'statut',
        'image',


    ];
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'appointments');
    }

    public function nurses()
    {
        return $this->belongsToMany(Nurse::class, 'appointments');
    }
}

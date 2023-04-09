<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'phone_number',
        'role'
    ];

    /**
     * Get the medical records for the nurse.
     */
    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    /**
     * Get the appointments for the nurse.
     */
    public function appointments()
    {
        return $this->hasManyThrough(Appointment::class, MedicalRecord::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointement extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id' ,
            'doctor_id',
            'date' ,
            'heure',
            'jour',
            'mois' ,
            'statut',
            'reason',
    ];

    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
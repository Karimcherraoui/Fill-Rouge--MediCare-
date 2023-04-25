<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


class Patients extends User
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'date_of_birth',
        'phone',
        'address',
        'assurance',

    ];

    public static function getPatientByEmail($email)
{
    return self::where('email', $email)->first();
}   
public static function getPatientById($id)
{
    return self::where('id', $id)->first();
}

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function availableAppointments()
    {
        return $this->hasMany(AvailableAppointment::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('UserName', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }
}
<?php

// namespace App\Models;

// // use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
// class User extends Authenticatable
// {
//     use HasFactory, Notifiable , HasApiTokens;

//     protected $fillable = [
//         'UserName',
//         'Password',
//     ];

//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];

//     public function appointments()
//     {
//         return $this->hasMany(Appointment::class);
//     }

//     public function medicalRecords()
//     {
//         return $this->hasMany(MedicalRecord::class);
//     }

//     public function availableAppointments()
//     {
//         return $this->hasMany(AvailableAppointment::class);
//     }
// }



namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable {
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
  
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
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

   
}

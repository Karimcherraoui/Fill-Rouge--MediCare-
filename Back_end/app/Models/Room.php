<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'type',
        'statut',


    ];

    /**
     * Get the beds for the room.
     */
    public function beds()
    {
        return $this->hasMany(Bed::class);
    }
}
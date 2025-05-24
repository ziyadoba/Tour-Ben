<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Touriste extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'addresse', 'numero'];

    public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}


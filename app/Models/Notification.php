<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $primaryKey = 'idNot';

    protected $fillable = [
        'id', 'message', 'dateNot', 'lu', 'typeNot'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }
}


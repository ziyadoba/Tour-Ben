<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    use HasFactory;

    protected $fillable = ['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

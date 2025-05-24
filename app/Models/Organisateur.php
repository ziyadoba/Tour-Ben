<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisateur extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'numberEnt'];

    public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

    public function sites()
    {
        return $this->hasMany(Site::class);
    }
}

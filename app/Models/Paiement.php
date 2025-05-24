<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPai';

    protected $fillable = [
        'id', 'montant', 'statutPai', 'datePai', 'modePai', 'referencePai'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

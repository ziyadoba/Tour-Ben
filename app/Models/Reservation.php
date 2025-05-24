<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'idRes';

    protected $fillable = [
        'idTouriste', 'statutRes', 'dateRes', 'motif', 'commentaire'
    ];

    public function touriste()
    {
        return $this->belongsTo(Touriste::class, 'idTouriste');
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function evenement()
    {
        return $this->belongsTo(Evenement::class);
    }
}


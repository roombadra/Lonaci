<?php

namespace App\Models;

use App\Models\Historique;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
     protected $fillable = [
        'nom_deposant',
        'prenom_deposant',
        'contact',
        'status',
        'observation',
        'id_terminal',
        'id_agence',
    ];

    public function Comment()
     {
       return $this->hasMany(Historique::class,'id_maintenance');
     }
}

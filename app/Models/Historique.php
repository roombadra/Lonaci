<?php

namespace App\Models;

use App\Models\Maintenance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;
     protected $fillable = [
        'commentaire',
        'id_agent',
        'id_maintenance',
    ];

    public function maintenance()
    {
        return $this->belongsTo(Maintenance::class,'id_maintenance');
    }
}

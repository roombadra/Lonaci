<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_guichet',
        'marque',
        'model',
        'status',
        'id_concessionnaire',
        'id_agence',
        'id_produit'
        ];
}

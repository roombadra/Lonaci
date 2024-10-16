<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LignePanne extends Model
{
    use HasFactory;
     protected $fillable = [
        'description',
        'gravite',
        'status',
        'id_terminal',
        'id_panne'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kati extends Model
{
    protected $table = 'etel';
    protected $primaryKey = 'id';
    protected $fillable = ['Ételneve', 'Típusa', 'Mennyiség'];
    // use HasFactory;
}

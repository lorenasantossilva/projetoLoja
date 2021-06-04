<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';
    protected $primarykey = 'id';
    protected $fillable = [
        'nome',
        'tipo_vinho',
        'valor',
        'peso',
        'created_at',
        'updated_at'
    ];
}

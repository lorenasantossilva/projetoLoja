<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $table = 'carrinho';
    protected $primarykey = 'id';
    protected $fillable = [
        'nome_produto',
        'peso',
        'tipo_vinho',
        'valor',
        'token',
        'created_at',
        'updated_at'
    ];
}

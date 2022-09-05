<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPerfil extends Model
{
    use HasFactory;
    protected $table = "tipo_perfil";
    protected $fillable = ["descripcion"];
}

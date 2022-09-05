<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuenteHumana extends Model
{
    use HasFactory;
    protected $table = "fuentes_humanas";
    protected $fillable = [
        "user_id",
        "dni",
        "nro_celular",
        "nombres",
        "apellidos",
        "email",
        "codigo",
        "direccion",
        "area_criminal",
        "ubigeo",
        "user_create"
    ];

}

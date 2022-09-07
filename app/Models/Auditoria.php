<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    use HasFactory;
    protected $table = "auditoria";
    protected $fillable = [
        "reporte_id",
        "date_open",
        "user_open",
    ];

    protected $casts = [
        'date_open' => 'datetime',
    ];

    public $timestamps = false;

    public function reporte()
    {
        return $this->belongsTo(Reporte::class, 'reporte_id', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_open', 'id');
    }
}

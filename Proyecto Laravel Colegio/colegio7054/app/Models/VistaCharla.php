<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VistaCharla extends Model
{
    protected $table = 'Vista_Charlas';
    protected $primaryKey = 'id_charla';
    public $timestamps = false; // Desactivar timestamps si no están en la vista

    protected $fillable = [
        'id_charla',
        'tema',
        'categoria',
        'fecha',
        'profesor_nombre',
        'profesor_apellido',
    ];
}

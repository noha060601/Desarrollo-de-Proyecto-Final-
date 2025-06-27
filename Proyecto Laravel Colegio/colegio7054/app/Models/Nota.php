<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['user_id', 'competencia_id', 'nota'];

    public function alumno()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function competencia()
    {
        return $this->belongsTo(Competencia::class);
    }
}


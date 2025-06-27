<?php

namespace App\Http\Controllers\controladores_profesor;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PromedionotasController extends Controller
{
    public function Promedionotaindex()
    {
        // Obtener todas las notas

        return view('pagina_profesor.notas_de_profesor.reporteugel.PromdeioNotas');
    }
}

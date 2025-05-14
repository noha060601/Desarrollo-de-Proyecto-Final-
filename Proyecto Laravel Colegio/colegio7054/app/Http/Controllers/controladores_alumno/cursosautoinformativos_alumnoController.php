<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_alumno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\VistaCharla;

// clase y funciones pra definir variables

class cursosautoinformativos_alumnoController extends Controller


{

    //funciones de retorno post y get

    public function autoinformativo()
    {
        // el nombre que se declara en la funcion es para retornar la route de la vista
        $charlas = VistaCharla::all();


        //esta es el retorno de la vista
        return view('pagina_estudiante.capacitacion.auto.capacitaciones_autoinformativas', compact('charlas'));


        // Pasamos los alumnos a la vista

    }
}

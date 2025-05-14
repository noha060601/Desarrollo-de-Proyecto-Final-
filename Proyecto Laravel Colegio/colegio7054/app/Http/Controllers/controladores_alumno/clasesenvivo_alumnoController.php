<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_alumno;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


// clase y funciones pra definir variables

class clasesenvivo_alumnoController extends Controller


{

    //funciones de retorno post y get

    public function envivo()
    {
        // el nombre que se declara en la funcion es para retornar la route de la vista


        //esta es el retorno de la vista
        return view('pagina_estudiante.capacitacion_en_vivo.en_vivo.clases_vivo');


        // Pasamos los alumnos a la vista

    }
}

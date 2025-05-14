<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_alumno;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


// clase y funciones pra definir variables

class actitudinal_alumnoController extends Controller


{

    //funciones de retorno post y get

    public function actitud()
    {
        // el nombre que se declara en la funcion es para retornar la route de la vista


        //esta es el retorno de la vista
        return view('pagina_estudiante.notas_de_estudiante.actitudinal.actitudinal_report');


        // Pasamos los alumnos a la vista

    }
}

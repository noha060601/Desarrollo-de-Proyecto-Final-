<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_profesor;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


// clase y funciones pra definir variables

class reportugel_profesorController extends Controller


{

    //funciones de retorno post y get

    public function ugelreport()
    {
        // el nombre que se declara en la funcion es para retornar la route de la vista


        //esta es el retorno de la vista
        return view('pagina_profesor.notas_de_profesor.reporteugel.notas_de_evaluacion_pedagogica');


        // Pasamos los alumnos a la vista

    }
}

<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_profesor;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


// clase y funciones pra definir variables

class grabada_profesorController extends Controller


{

    //funciones de retorno post y get

    public function grabadaprofesor()
    {
        // el nombre que se declara en la funcion es para retornar la route de la vista


        //esta es el retorno de la vista
        return view('pagina_profesor.capacitacion_en_vivo.grabadaprofesor.capacitacion_grabada');


        // Pasamos los alumnos a la vista

    }
}

<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_alumno;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; //importacion para la base de datos 


// clase y funciones pra definir variables

class curso_alumnoController extends Controller


{

    //funciones de retorno post y get

    public function index1()
    {
        // el nombre que se declara en la funcion es para retornar la route de la vista
        $cursos = DB::table('Vista_Cursos_Horarios')->get();


        //esta es el retorno de la vista
        return view('pagina_estudiante.capacitacion.capacitacionactual.capacitacion_actuales',compact('cursos'));


        // Pasamos los alumnos a la vista

    }
}

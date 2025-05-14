<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_alumno;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


// clase y funciones pra definir variables

class cursostranscurrido_alumnoController extends Controller


{

    //funciones de retorno post y get

    public function transcurrido()
    {
        // el nombre que se declara en la funcion es para retornar la route de la vista
        $transcurrido = DB::table('Vista_Cursos_Notas')->get();


        //esta es el retorno de la vista
        return view('pagina_estudiante.capacitacion.transcur.capacitaciones_transcurridas',compact('transcurrido'));


        // Pasamos los alumnos a la vista

    }
}

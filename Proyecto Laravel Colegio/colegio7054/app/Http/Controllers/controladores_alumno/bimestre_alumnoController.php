<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_alumno;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


// clase y funciones pra definir variables

class bimestre_alumnoController extends Controller


{

    //funciones de retorno post y get

    public function bimestre(Request $request)
    {
            // Capturamos los filtros del request
            $filtros = [
                'docente' => $request->input('docente'),
                'seccion' => $request->input('seccion'),
                'grado' => $request->input('grado'),
                'curso' => $request->input('curso')
            ];

            // Base de la consulta a la vista `VistaResumenNotas`
            $query = DB::table('VistaResumenNotas');

            // Aplicamos los filtros si existen
            if ($filtros['docente']) {
                $query->where('Docente', $filtros['docente']);
            }
            if ($filtros['seccion']) {
                $query->where('Seccion', $filtros['seccion']);
            }
            if ($filtros['grado']) {
                $query->where('Grado', $filtros['grado']);
            }
            if ($filtros['curso']) {
                $query->where('Curso', $filtros['curso']);
            }

            // Ejecutamos la consulta
            $datosEstudiantes = $query->get();


        //esta es el retorno de la vista
        return view('pagina_estudiante.notas_de_estudiante.bimestre.notas_bimestre',compact('datosEstudiantes', 'filtros'));



        // Pasamos los alumnos a la vista

    }
}

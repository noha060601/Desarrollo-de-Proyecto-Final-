<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_profesor;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


// clase y funciones pra definir variables

class reprotestudiante_profesorController extends Controller


{

    //funciones de retorno post y get

        public function estudiantereport(Request $request)
        {
            // el nombre que se declara en la funcion es para retornar la route de la vista
            $VistaResumenNotas1 = DB::table('VistaResumenNotas')->get();

            //esta es el retorno de la vista
            return view('pagina_profesor.notas_de_profesor.reportestudiantil.reporte_de_evaluacion_estudiantil');


            // Pasamos los alumnos a la vista

        }
        // Método para guardar los datos (para futuras funcionalidades)
         // Método para guardar los promedios finales en la base de datos
        public function guardar(Request $request)
        {
            // Obtener los datos enviados desde el frontend
            $notasData = $request->input('notas');

            // Procesar cada entrada y almacenar el promedio en la base de datos
            foreach ($notasData as $data) {
                $alumnoId = $data['id_alumno'];
                $promedioFinal = $data['promedio_final'];

                // Actualizar o insertar el promedio final en una tabla, por ejemplo, en una tabla `Promedios`
                DB::table('Promedios')->updateOrInsert(
                    ['id_alumno' => $alumnoId],
                    ['promedio_final' => $promedioFinal, 'updated_at' => now()]
                );
            }

            return response()->json(['message' => 'Promedios guardados exitosamente.']);
        }

        // Método para exportar a Excel
        public function exportarExcel()
        {
            // Implementar la lógica de exportación a Excel
            return response()->json(['message' => 'Exportando a Excel...']);
        }

        // Método para exportar a PDF
        public function exportarPDF()
        {
            // Implementar la lógica de exportación a PDF
            return response()->json(['message' => 'Exportando a PDF...']);
        }
}

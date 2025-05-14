<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_alumno;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


// clase y funciones pra definir variables

class horariocursos_alumnoController extends Controller


{

    //funciones de retorno post y get

    public function hoarioalumno()
    {
        $horarios = [
            'Lunes' => [
                'Mañana' => [
                    ['materia' => 'Matemáticas', 'hora' => '8:00 - 9:30'],
                    ['materia' => 'Ciencias', 'hora' => '10:00 - 11:30'],
                ],
                'Tarde' => [
                    ['materia' => 'Educación Física', 'hora' => '13:00 - 14:30'],
                    ['materia' => 'Arte', 'hora' => '15:00 - 16:30'],
                ]
            ],
            'Martes' => [
                'Mañana' => [
                    ['materia' => 'Comunicación', 'hora' => '8:00 - 9:30'],
                    ['materia' => 'Historia', 'hora' => '10:00 - 11:30'],
                ],
                'Tarde' => [
                    ['materia' => 'Inglés', 'hora' => '13:00 - 14:30'],
                    ['materia' => 'Civismo', 'hora' => '15:00 - 16:30'],
                ]
            ],
            'Miercoles ' => [
                'Mañana' => [
                    ['materia' => 'Comunicación', 'hora' => '8:00 - 9:30'],
                    ['materia' => 'Historia', 'hora' => '10:00 - 11:30'],
                ],
                'Tarde' => [
                    ['materia' => 'Inglés', 'hora' => '13:00 - 14:30'],
                    ['materia' => 'Civismo', 'hora' => '15:00 - 16:30'],
                ]
            ],
            'Jueves' => [
                'Mañana' => [
                    ['materia' => 'Comunicación', 'hora' => '8:00 - 9:30'],
                    ['materia' => 'Historia', 'hora' => '10:00 - 11:30'],
                ],
                'Tarde' => [
                    ['materia' => 'Inglés', 'hora' => '13:00 - 14:30'],
                    ['materia' => 'Civismo', 'hora' => '15:00 - 16:30'],
                ]
            ],
            'Viernes' => [
                'Mañana' => [
                    ['materia' => 'Comunicación', 'hora' => '8:00 - 9:30'],
                    ['materia' => 'Historia', 'hora' => '10:00 - 11:30'],
                ],
                'Tarde' => [
                    ['materia' => 'Inglés', 'hora' => '13:00 - 14:30'],
                    ['materia' => 'Civismo', 'hora' => '15:00 - 16:30'],
                ]
            ],
        ];
        // el nombre que se declara en la funcion es para retornar la route de la vista


        //esta es el retorno de la vista
        return view('pagina_estudiante.horario_cursos.horario_detallado', compact('horarios'));


        // Pasamos los alumnos a la vista

    }
}

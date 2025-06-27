<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\controladores_alumno\curso_alumnoController; // Asegúrate de importar el controlador
use App\Http\Controllers\controladores_alumno\cursostranscurrido_alumnoController;
use App\Http\Controllers\controladores_alumno\cursosautoinformativos_alumnoController;


use App\Http\Controllers\controladores_alumno\clasesenvivo_alumnoController;
use App\Http\Controllers\controladores_alumno\clasesesgrabadas_alumnoController;





Route::get('/', function () {
    return view('welcome1');
});

Auth::routes();

Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');




// Modulo de alumnos

// Agrupación de rutas para el módulo de cursos de alumnos

Route::prefix('pagina_estudiante/capacitacion')->name('pagina_estudiante.capacitacion.')->group(function () {
    Route::get('/capacitacionactual', [App\Http\Controllers\controladores_alumno\curso_alumnoController::class, 'index1'])->name('capacitacionactual.capacitacion_actuales');
    Route::get('/transcur', [App\Http\Controllers\controladores_alumno\cursostranscurrido_alumnoController::class, 'transcurrido'])->name('capacitaciones_transcurridas');
    Route::get('/auto', [App\Http\Controllers\controladores_alumno\cursosautoinformativos_alumnoController::class, 'autoinformativo'])->name('capacitaciones_autoinformativas');
});

// Agrupación de rutas para el módulo de clases de alumnos

Route::prefix('pagina_estudiante/capacitacion_en_vivo')->name('pagina_estudiante.capacitacion_en_vivo.')->group(function () {
    Route::get('/en_vivo', [App\Http\Controllers\controladores_alumno\clasesenvivo_alumnoController::class, 'envivo'])->name('en_vivo.clases_vivo');
    Route::get('/grabadas', [App\Http\Controllers\controladores_alumno\clasesesgrabadas_alumnoController::class, 'grabadas'])->name('grabadas.clases_grabada');
});
// Agrupación de rutas para el módulo de horario de alumnos

Route::get('/pagina_estudiante/horario_cursos', [App\Http\Controllers\controladores_alumno\horariocursos_alumnoController::class, 'hoarioalumno'])->name('pagina_estudiante.horario_cursos.horario_detallado');

// Agrupación de rutas para el módulo de notas de estudiante

Route::prefix('pagina_estudiante/notas_de_estudiante')->name('pagina_estudiante.notas_de_estudiante.')->group(function () {
    Route::get('/actitudinal', [App\Http\Controllers\controladores_alumno\actitudinal_alumnoController::class, 'actitud'])->name('actitudinal.actitudinal_report');
    Route::get('/bimestre', [App\Http\Controllers\controladores_alumno\bimestre_alumnoController::class, 'bimestre'])->name('bimestre.notas_bimestre');
    Route::get('/notas', [App\Http\Controllers\controladores_alumno\libreta_alumnoController::class, 'libreta'])->name('notas.libretas_notas');
});

//Agrupacion de rutas para el modulo de recursos academicos de alumnos

Route::prefix('pagina_estudiante/recursos_academicos')->name('pagina_estudiante.recursos_academicos.')->group(function () {
    Route::get('/incidencias', [App\Http\Controllers\controladores_alumno\registroincidencia_alumnoController::class, 'incidencia'])->name('incidencias.registro_de_incidencia');
    Route::get('/libros', [App\Http\Controllers\controladores_alumno\registrolibros_alumnoController::class, 'librosregister'])->name('libros.reserva_de_libros');
    Route::get('/talleres', [App\Http\Controllers\controladores_alumno\registrotalleres_alumnoController::class, 'talleresregister'])->name('talleres.reserva_de_area');
});


//modulo de profesores

// Agrupación de rutas para el módulo de capacitacion  de profesores

Route::get('/pagina_profesor/capacitacion/capaprofesor', [App\Http\Controllers\controladores_profesor\capa_profesorController::class, 'capaprofesor'])->name('pagina_profesor.capacitacion.capaprofesor.capacitacion_profesor');
Route::get('/pagina_profesor/capacitacion/historialcapa', [App\Http\Controllers\controladores_profesor\historial_profesorController::class, 'historial'])->name('pagina_profesor.capacitacion.historialcapa.historial_de_capacitaciones');

// Agrupación de rutas para el módulo de capacitacion en vivo   de profesores

Route::get('/pagina_profesor/capacitacion_en_vivo/envivoprofesor', [App\Http\Controllers\controladores_profesor\vivo_profesorController::class, 'vivoprofesor'])->name('pagina_profesor.capacitacion_en_vivo.envivoprofesor.capacitacion_actual');
Route::get('/pagina_profesor/capacitacion_en_vivo/grabadaprofesor', [App\Http\Controllers\controladores_profesor\grabada_profesorController::class, 'grabadaprofesor'])->name('pagina_profesor.capacitacion_en_vivo.grabadaprofesor.capacitacion_grabada');

// Agrupación de rutas para el módulo de horario detallado de profesores

//Route::get('/pagina_profesor/horario_de_capacitacion', [App\Http\Controllers\controladores_profesor\horario_profesorController::class, 'horarioprofe'])->name('pagina_profesor.horario_de_capacitacion.horario_detallado1');
use App\Http\Controllers\EventController;

Route::get('/pagina_profesor/horario_de_capacitacion', [App\Http\Controllers\controladores_profesor\EventController::class, 'index'])->name('pagina_profesor.horario_de_capacitacion.horario_detallado1.index');



// Agrupación de rutas para el módulo de notas de profesor
Route::get('/pagina_profesor/notas_de_profesor/reportestudiantil', [App\Http\Controllers\controladores_profesor\reprotestudiante_profesorController::class, 'notaindex'])->name('pagina_profesor.notas_de_profesor.reportestudiantil');

//Agrupacionn para el promdeio de notas por seccion 
Route::get('/pagina_profesor/notas_de_profesor/reporteugel', [App\Http\Controllers\controladores_profesor\PromedionotasController::class, 'Promedionotaindex'])->name('pagina_profesor.notas_de_profesor.reporteugel.PromdeioNotas');


// Agrupación de rutas para el módulo de capacitacion en vivo   de profesores

Route::get('/pagina_profesor/recursos_academicos/incidencia_aula', [App\Http\Controllers\controladores_profesor\incidenciaprofesor_profesorController::class, 'incidenciaprofe'])->name('pagina_profesor.recursos_academicos.incidencia_aula.reporte_de_evaluacion_estudiantil');
Route::get('/pagina_profesor/recursos_academicos/reservadelbrosymateriales', [App\Http\Controllers\controladores_profesor\reservamaterial_profesorController::class, 'reservamaterial'])->name('pagina_profesor.recursos_academicos.reservadelbrosymateriales.reserva_de_libros');
Route::get('/pagina_profesor/recursos_academicos/reservadepatioylaoratorio', [App\Http\Controllers\controladores_profesor\reserva_laboratorio_profesorController::class, 'reservalaboratorio'])->name('pagina_profesor.recursos_academicos.reservadepatioylaoratorio.reserva_de_area');



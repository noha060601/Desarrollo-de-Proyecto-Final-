<?php

namespace App\Http\Controllers\controladores_profesor;

use App\Http\Controllers\Controller;
//use App\Models\Event; // Asegúrate de importar el modelo Event
use Illuminate\Http\Request;



class EventController extends Controller
{
    //pagina_profesor.horario_de_capacitacion.horario_detallado1'
    public function index()
       {
            $meses = [
            'Enero' => 31,
            'Febrero' => 28, // Considerar año bisiesto si es necesario
            'Marzo' => 31,
            'Abril' => 30,
            'Mayo' => 31,
            'Junio' => 30,
            'Julio' => 31,
            'Agosto' => 31,
            'Septiembre' => 30,
            'Octubre' => 31,
            'Noviembre' => 30,
            'Diciembre' => 31,
            ];
            $anio = date('Y'); // Año actual
            $meses['Febrero'] = ($anio % 4 === 0 && ($anio % 100 !== 0 || $anio % 400 === 0)) ? 29 : 28;


            return view('pagina_profesor.horario_de_capacitacion.horario_detallado1', compact('meses'));
        }
    }




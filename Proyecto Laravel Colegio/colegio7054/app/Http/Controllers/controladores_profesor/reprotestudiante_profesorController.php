<?php
//ruta de controlador buscar la carpeta de acuerdo a la funcion
namespace App\Http\Controllers\controladores_profesor;
// importaciones y uso copiar y pegar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



// clase y funciones pra definir variables

class reprotestudiante_profesorController extends Controller


{
    public function notaindex()
{

    return view('pagina_profesor.notas_de_profesor.reportestudiantil.NotasEstudiantes');
}

   
}

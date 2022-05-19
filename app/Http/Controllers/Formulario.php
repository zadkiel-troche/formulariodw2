<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formulario extends Controller
{
    //funcion para guardar guardar datos
    public function completar(Request $request){
        
        $pregA = $request->input("rta1");
        $pregB = $request->input("rta2");

        $seleccion = $request->input("select");

        //dd($seleccion);

        return redirect('/');
    }
}

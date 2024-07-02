<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function resultado(Request $request)
    {
        // Obtener datos del formulario
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $mail = $request->input('mail');
        $fecha = $request->input('fecha');
        $modelo = $request->input('modelo');
        $rodado = $request->input('rodado');
        $puertas = $request->input('puertas');
        $comentario = $request->input('comentario');

        // Manejar el archivo subido
        $img = $request->file('img');
        $imgPath = '';
        if ($img) {
            $imgPath = $img->store('archivo', 'public');
        }

        // Pasar datos a la vista
        return view('resultado', compact('nombre', 'apellido', 'mail', 'fecha', 'modelo', 'rodado', 'puertas', 'comentario', 'imgPath'));
    }
}

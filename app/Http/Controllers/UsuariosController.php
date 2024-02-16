<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsuariosController extends Controller
{
    //Página de Inicio
    public function acceso()
    {
        return view('templates/header') . view('acceso') . view('templates/footer');
    }
    public function registrarSesion(Request $request)
    {
        //obtenemos el valor enviado por el formulario
        $nombre = $request->post('nombre');
        //creamos un objeto de tipo sesión
        $sesion = Session();
        $sesion->put('nombre', $nombre);
        return view('templates/header') . view('listaMensajes') . view('templates/footer');
    
    }
}

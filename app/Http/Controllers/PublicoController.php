<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class PublicoController extends Controller
{
    public function index()
    {
        $productos =  Producto::all();
        return view('Publico.index', compact('productos'));
    }

    public function show($id){
    $producto = Producto::findOrFail($id);
    
    return view('Publico.ver', compact('producto'));
    }

   



}

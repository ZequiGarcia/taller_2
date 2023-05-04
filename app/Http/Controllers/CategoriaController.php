<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {

        $categoria =  Categoria::get();
        return view('Categoria.index', compact('categoria'));
    }

   
    public function create()
    {
        return view('Categoria.create');    
    }

    public function store(Request $request)
{
    $categoria = new Categoria();
    $categoria->id = $request->input('id');
    $categoria->nombre = $request->input('nombre');
    $categoria->save();
    
    session()->flash('message', 'Categoría creada con éxito!');
    return redirect()->route('categorias.index');
}


    public function show( $autor)
    {
    }

    public function edit($codigo)
    {
        $categoria = Categoria::find($codigo);
        return view('Categoria.modify', compact('categoria'));
    }

   public function update(Request $request, $codigo){
   // Buscar el producto a actualizar en la base de datos
   $categoria = Categoria::findOrFail($codigo);

   // Actualizar los datos del producto con los valores recibidos del formulario
   $categoria->nombre = $request->input('nombre');
   $categoria->id = $request->input('codigo');

   // Guardar los cambios en la base de datos
   $categoria->save();

   // Redirigir al usuario a la página de listado de productos
   session()->flash('message', 'Categoría modificada con éxito!');
   return redirect()->route('categorias.index');
}

public function destroy($producto)
{

    Categoria::destroy($producto);

    session()->flash('message', 'Categoría borrada con éxito!');
    return redirect()->route('categorias.index');
}
}

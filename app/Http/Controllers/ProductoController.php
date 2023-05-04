<?php


namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    
    public function index()
    {
        $productos =  Producto::with('Categoria')->get();
     
        return view('Producto.index', compact('productos'));
    }

   
    public function create()
    {
       $categorias=Categoria::all();
        return view('Producto.create', compact('categorias'));    
    }

   
    public function store(Request $request)
    {
       
        
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->codigo = $request->input('codigo');
        $producto->descripcion = $request->input('descripcion');
        $producto->imagen = file_get_contents($request->file('imagen')->getRealPath());
        $producto->categoria = $request->input('categoria');
        $producto->precio = $request->input('precio');
        $producto->existencias = $request->input('existencias');
        
        $producto->save();

        session()->flash('message', 'Producto creado con éxito!');
        return redirect()->route('productos.index');
    }
    




    public function show(Producto $codigo)
    {
        $producto = Producto::find($codigo);
        
        return view('Producto.index');
    }

   
    public function edit($codigo)
    {
        $producto = Producto::find($codigo);
        return view('Producto.modify', compact('producto'));
    }

 
    public function update(Request $request, $codigo)
    {
        $producto = Producto::find($codigo);
    
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'nullable|image',
            'categoria' => 'required',
            'precio' => 'required|numeric',
            'existencias' => 'required|numeric'
        ]);
    
        $producto->nombre = $validatedData['nombre'];
        $producto->descripcion = $validatedData['descripcion'];
        $producto->categoria = $validatedData['categoria'];
        $producto->precio = $validatedData['precio'];
        $producto->existencias = $validatedData['existencias'];
    
        if ($request->hasFile('imagen')) {
            // Si se ha seleccionado un archivo de imagen, se actualiza la imagen del producto
            $imagen = $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('public/productos', $imagen);
            $producto->imagen = $imagen;
        }
    
        $producto->save();
    
        session()->flash('message', 'Producto modificado con éxito!');
        return redirect()->route('productos.index');
    }
    


    public function destroy($producto)
    {
    
        Producto::destroy($producto);

        session()->flash('message', 'Producto eliminado con éxito!');
        return redirect()->route('productos.index');
    }
}

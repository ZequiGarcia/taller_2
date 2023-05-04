<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {

        $ventas =  Venta::with('Cliente')->get();
        return view('Venta.index', compact('ventas'));
    }

   
    public function create()
    {
        $clientes=Cliente::all();
        return view('Venta.create', compact('clientes'));    
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'fecha' => 'required',
            'total' => 'required',
            'cliente' => 'required',
        ]);
    
        $cliente = new Venta();
        $cliente->id = $validatedData['id'];
        $cliente->fecha = $validatedData['fecha'];
        $cliente->total = $validatedData['total'];
        $cliente->cliente = $validatedData['cliente'];
        $cliente->save();
    
        session()->flash('message', 'Venta creada con éxito!');
        return redirect()->route('ventas.index');
    }
    

    public function show(Autor $autor)
    {
        //
    }

    public function edit($codigo)
    {
        $venta = Venta::find($codigo);
        return view('Venta.modify', compact('venta'));
    }

    public function update(Request $request, $codigo){
        // Buscar la venta a actualizar en la base de datos
        $venta = Venta::findOrFail($codigo);
    
        // Validar los datos recibidos del formulario
        $validatedData = $request->validate([
            'id' => 'required',
            'fecha' => 'required',
            'total' => 'required',
            'cliente' => 'required',
        ]);
    
        // Actualizar los datos de la venta con los valores recibidos del formulario
        $venta->id = $validatedData['id'];
        $venta->fecha = $validatedData['fecha'];
        $venta->total = $validatedData['total'];
        $venta->cliente = $validatedData['cliente'];
    
        // Guardar los cambios en la base de datos
        $venta->save();
    
        // Redirigir al usuario a la página de listado de ventas
        session()->flash('message', 'Venta modificada con éxito!');
        return redirect()->route('ventas.index');
    }
    

    public function destroy($id)
    {
        //
        Venta::find($id);

        session()->flash('message', 'Venta elimanada con éxito!');
        return redirect()->route('ventas.index');
    }
}

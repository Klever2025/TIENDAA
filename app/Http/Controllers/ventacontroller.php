<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Persona;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with(['persona', 'producto'])->get();
        return view('venta.index', compact('ventas'));
    }

    public function create()
    {
        $personas = Persona::all();
        $productos = Producto::all();
        return view('venta.create', compact('personas', 'productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'persona_id' => 'required|exists:personas,id',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'venta' => 'required|numeric|min:0',
        ]);

        Venta::create($request->all());
        return redirect()->route('ventas.index');
    }

    public function show(Venta $venta)
    {
        return view('venta.show', compact('venta'));
    }

    public function edit(Venta $venta)
    {
        $personas = Persona::all();
        $productos = Producto::all();
        return view('venta.edit', compact('venta','personas','productos'));
    }

    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'persona_id' => 'required|exists:personas,id',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'venta' => 'required|numeric|min:0',
        ]);

        $venta->update($request->all());
        return redirect()->route('ventas.index');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index');
    }
}
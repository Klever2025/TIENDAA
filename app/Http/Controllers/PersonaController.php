<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    public function create()
    {
        return view('persona.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
        ]);

        Persona::create($request->all());
        return redirect()->route('persona.index')->with('success', 'Persona creada correctamente.');
    }

    public function show(Persona $persona)
    {
        return view('persona.show', compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('persona.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
        ]);

        $persona->update($request->all());
        return redirect()->route('persona.index')->with('success', 'Persona actualizada correctamente.');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index')->with('success', 'Persona eliminada correctamente.');
    }
}

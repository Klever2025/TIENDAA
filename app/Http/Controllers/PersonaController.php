<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona; // Asegúrate de importar el modelo correcto

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
      return view('persona.index', ['personas' => $personas]);
    }

    public function create()
    {
        return view('persona.create');
    }

    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:persona,email',
            'telefono' => 'nullable|string|max:20',
        ]);

        Persona::create($request->all());

        // Redirige o retorna una respuesta
        return redirect()->route('persona.index')->with('success', 'Persona creada correctamente.');
    }
}
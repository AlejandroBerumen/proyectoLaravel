<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::latest()->get(); // Obtener todos los alumnos sin paginación
        return view('alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insertar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'Nombre' => 'required',
            'Semestre' => 'required',

        ]);

        
        Log::info('Valores de la solicitud:', $request->all());

        Alumno::create($request->post());
        
        Session::flash('success', 'Alumno insertado correctamente');
        return redirect()->route('alumnos.index');
    }


    


    // public function eliminarAlumno($index)
    // {
    //     $grupoAlumnos = Session::get('grupo_alumnos', []);

    //     // Verificar si el índice existe en el arreglo
    //     if (isset($grupoAlumnos[$index])) {
    //         // Eliminar el alumno del grupo utilizando el índice
    //         unset($grupoAlumnos[$index]);

    //         // Actualizar la variable de sesión
    //         Session::put('grupo_alumnos', $grupoAlumnos);

    //         return redirect()->back()->with('success', 'El alumno ha sido eliminado del grupo correctamente.');
    //     }

    //     return redirect()->back()->with('error', 'No se pudo encontrar el alumno en el grupo.');
    // }

    // endgrupo alumnos



    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('mostrar', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            // Manejar el caso donde el alumno no existe
            abort(404);
        }

        return view('edit', compact('alumno'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'Nombre' => 'required',
            'Semestre' => 'required',
        ]);
    
        $alumno->Nombre = $request->input('Nombre');
        $alumno->Semestre = $request->input('Semestre');
        $alumno->save();
    
        return redirect()->route('alumnos.index')->with('success', 'Alumno modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno Eliminado correctamente');
    }

    public function agregarAGrupo(Alumno $alumno){
        $alumno =[
            'numControl' => $alumno->Num_Control,
            'nombre' => $alumno->Nombre,
            'semestre' => $alumno->Semestre
        ];

        $grupoAlumnos = Session::get('grupo_alumnos', []);
        $grupoAlumnos[] = $alumno;
        Session::put('grupo_alumnos', $grupoAlumnos);

        return redirect()->back()->with('success', 'Alumno a sido agregado al grupo correctamente');
    }

    public function mostrarAlumnosGrupo(){
        $grupoAlumnos = Session::get('grupo_alumnos', []);
        return view('grupo_alumnos', compact('grupoAlumnos'));
    }

    public function eliminarGrupoAlumnos(){
        Session::forget('grupo_alumnos');
        return redirect()->back()->with('success', 'El grupo de alumnos ha sido eliminado correctamente');
    }
}

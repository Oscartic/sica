<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function horario(){
        return view('horario');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('docente.index',
            [
                'professors' => Professor::orderBy('nombre')->withTrashed()->paginate(6)
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professor = new Professor();
        return view('docente.create', ['professor' => $professor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nombre' => 'required|max:255',
                'rut' => 'required|unique:professors|max:10',
                'titulo' => 'max:25',
                'email' => 'required|unique:professors|max:60'
            ],
            [
                'nombre.required' => 'El Nombre del Docente es requerido.',
                'rut.required' => 'El Rut del Docente es requerido.',
                'rut.unique' => 'El Rut ya esta registrado.',
                'rut.max' => 'El Rut supera el maximo de caracteres (10).',
                'titulo.max' => 'El titulo supera el máximo de caracteres permitidos (25).',
                'email.required' => 'El e-Mail es requerido.',
                'email.unique' => 'El e-Mail esta asignado a otro Docente.',

            ]
        );

        Professor::create($request->input());
        return redirect('docente')->with('message', 'Docente agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::find($id);
        return view('docente.show', ['professor' => $professor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Professor::find($id);
        return view('docente.edit', ['professor' => $professor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'nombre' => 'required',
                'rut' => "required|max:10|unique:professors,rut,{$request->input('id')}",
                'email' => "required|unique:professors,rut,{$request->input('id')}"
            ],
            [
                'nombre.required' => 'El Nombre del Docente es requerido',
                'rut.required' => 'El Rut del Docente es requerido',
                'email.required' => 'El e-Mail es requerido'
            ]
        );

        $professor = Professor::find($id);
        $professor->fill($request->all())->save();
        return redirect('docente')->with('message', 'Datos Docente, actualizados.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Professor::destroy($id);
        return redirect('docente')->with('message', 'Docente eliminado');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($id)
    {
        Professor::withTrashed()->find($id)->restore();
        return redirect('docente')->with('message', 'Docente recuperado');
    }
}

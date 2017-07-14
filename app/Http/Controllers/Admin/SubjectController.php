<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('asignatura.index',
            [
                'subjects' => Subject::orderBy('asignatura')->withTrashed()->paginate(10)
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = new Subject();
        return view('asignatura.create', ['subject' => $subject]);
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
                'cod' => 'required|max:255',
                'asignatura' => 'required|unique:subjects|max:100',
                'nivel' => 'required',
                'optativa' => 'required',
                'tipo' => 'required',
                'horas' => 'required'

            ],
            [
                'cod.required' => 'El Código es requerido',
                'asignatura.required' => 'La Asignatura es requerida',
                'asignatura.unique' => 'La Asignatura ya esta registrada',
                'nivel.required' => 'El nivel es requerido',
                'optativa.required' => '¿La Asignatura es optativa?. Completar campo "optativa"',
                'tipo.required' => '¿Qué tipo de asignatura es?. Completar campo "tipo"',
                'horas.required' => '¿Cuantas horas tiene la Asignatura?. Completar campo horas'
            ]
        );

        Subject::create($request->input());
        return redirect('asignatura')->with('message', 'Asignatura agregada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('asignatura.edit', ['subject' => $subject]);
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
                'cod' => 'required|max:255',
                'asignatura' => "required|max:100|unique:subjects,asignatura,{$request->input('id')}",
                'nivel' => 'required',
                'optativa' => 'required',
                'tipo' => 'required',
                'horas' => 'required'
            ],
            [
                'cod.required' => 'El Código es requerido',
                'asignatura.required' => 'La Asignatura es requerida',
                'asignatura.unique' => 'La Asignatura ya esta registrada',
                'nivel.required' => 'El nivel es requerido',
                'optativa.required' => '¿La Asignatura es optativa?. Completar campo "optativa"',
                'tipo.required' => '¿Qué tipo de asignatura es?. Completar campo "tipo"',
                'horas.required' => '¿Cuantas horas tiene la Asignatura?. Completar campo horas'
            ]
        );

        $subject = Subject::find($id);
        $subject->fill($request->all())->save();
        return redirect('asignatura')->with('message', 'Datos de la Asignatura actualizados.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect('asignatura')->with('message', 'Asignatura eliminada');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($id)
    {
        Subject::withTrashed()->find($id)->restore();
        return redirect('asignatura')->with('message', 'Asignatura recuperada');
    }
}

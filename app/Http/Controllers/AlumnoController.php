<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //*Consultar datos en DB variable"alumnos" usado index en el @foreach"
        $datos['alumnado']=Alumno::paginate(10);
        return view('alumno.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
       
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Muestra información impreso en formato Json del formulario create
        Mostrar toda la inf escepto el token, luego incertar a la base de datos
        $datosAlumno = request()->all();
        */
        $datosAlumno = request()->except('_token');
//*Insrtamos fotografía a la base de datos
        if($request->hasfile('Foto')){
            $datosAlumno['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Alumno::insert($datosAlumno);

        return response()->json($datosAlumno);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     *///*recuperar datos de formulario edit. Trabajamos con variable 'alumnado'
    public function edit($id)
    {
        //
        $alumno=Alumno::findOrFail($id);
        return view('alumno.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, Alumno $alumno) cambiamos por id

    public function update(Request $request, $id)
    {
        //
        $datosAlumno = request()->except(['_token','_method']);
        Alumno::where('id','=',$id)->update('datosAlumno');

        $datosAlumno =Alumno::findOrFail($id);
        return view('alumno.edit', compact('datosAlumno'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //método usado para borrar registros almacenado en base datos
        Alumno::destroy($id);
        return redirect('alumno');

    }
}

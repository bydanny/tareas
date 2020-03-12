<?php

namespace App\Http\Controllers;

use App\Tarea;
use App\categoria;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //

        $tarea = Tarea::all();
      //  dd($tarea);
        return view('tareas.tareasindex')->with(['tareas'=>$tarea]);
        return view('tareas.tareasindex',compact('tareas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = categoria::all()->pluck('nombre_categoria', 'id');
        return view('tareas.tareaform',compact('categorias'));
        dd($categorias); //consultar
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
       // dd($request->nombre_tarea);
        //dd($request->fecha_inicio);
      //  return 'DATOS RECIBIDOS';

        $request->validate([
            'nombre_tarea'=> 'required',
            'fecha_inicio'=> 'required|date',
            'fecha_termino'=> 'required|date',
            'prioridad'=> 'required',
        ]);

        $request->merge(['user_id' => \Auth::id()]);
         //   dd($request->all());
        Tarea::create($request->all());

        Tarea::where('id',$tarea_id)
                ->update($request->exept('_token','method'));
     /* $tarea = new Tarea();
      $tarea->categoria_id = $request->categoria_id;
      $tarea->nombre_tarea = $request->nombre_tarea ?? '';
      $tarea->fecha_inicio = $request->fecha_inicio;
      $tarea->fecha_termino = $request->fecha_termino;
      $tarea->prioridad = $request->prioridad;

      $tarea->save();*/
      // dd($tarea);
      return redirect()->route('tareas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
        return view('tareas.tareashow',compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
        return view ('tareas.tareaform',compact('tarea'));//pasar instancia de la tarea
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
        $categorias = categoria::all()->pluck('nombre_categoria', 'id');
        return view('tareas.tareaform',compact('categorias'));
       /* $tarea->nombre_tarea = $request->nombre_tarea;
        $tarea->categoria_id = $request->categoria_id;
        $tarea->fecha_inicio = $request->fecha_inicio;
        $tarea->fecha_termino = $request->fecha_termino;
        $tarea->prioridad = $request->prioridad;

        $tarea->save();
        return redirect()->route('tareas.show',$tarea->id);
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
        $tarea->delete();
        return redirect()->route('tareas.index');
    }
}

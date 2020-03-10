@extends('layouts.app')

@section('content')
<br>
        <div class="card-body">
            <div class="{{action('TareaController@create')}}"class="btn btn-success"
               <hr>
               <center> Mi Tarea </center>
            </div>
            <a href="{{ route('tareas.edit', $tarea->id)}}"<button type="button" class="btn btn-primary">Editar Tarea</button> </a>
        </div>
        <hr>

    <form action="{{ route('tareas.destroy', $tarea->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Borrar</button>
        </form>

        <table class="table">
            <tr>
                <th>ID </th>
                <th> Tarea </th>
                <th> Fecha inicio </th>
                <th> Fecha Final </th>
                <th> Estado </th>
                <th> Prioridad </th>
            </tr>
            <tr>
            <td>{{$tarea->id}}</td>
            <td>{{$tarea->nombre_tarea}}</td>
            <td>{{$tarea->fecha_inicio}}</td>
            <td>{{$tarea->fecha_termino}}</td>
            <td>{{$tarea->estatus}}</td>
            <td>{{$tarea->prioridad}}</td>
            </tr>
           {{-- <tr>
                    <td colspan="6">
                        Usuario: {{$tarea->user->name }} ({{ $tarea->user->email }})
                    </tr>--}}


    </body>


</html>


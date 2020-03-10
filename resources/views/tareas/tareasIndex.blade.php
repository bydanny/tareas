@extends('layouts.app')

@section('content')
<br>
        <div class="card-body">
            <div class="{{action('TareaController@create')}}"class="btn btn-success"
               <hr>
               Listado
            </div>
            <a href="tareas/create"<button type="button" class="btn btn-primary">Formulario</button> </a>


        </div>

        <table class="table">
            <tr>
                <th>ID </th>
                <th> Tarea </th>
                <th> Fecha inicio </th>
                <th> Fecha termino </th>
                <th> Estado </th>
                <th> Prioridad </th>
            </tr>
           @foreach($tareas as $mitarea)
            <tr>
            <td>{{$mitarea->id}}</td>
            <td>
            <a href="{{route('tareas.show',$mitarea->id)}}">
                {{$mitarea->nombre_tarea}}
            </td>
            </a>
            <td>{{$mitarea->fecha_inicio}}</td>
            <td>{{$mitarea->fecha_termino}}</td>
            <td>{{$mitarea->estatus}}</td>
            <td>{{$mitarea->prioridad}}</td>
            </tr>
            @endforeach


    </body>


</html>

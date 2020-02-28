@extends('layouts.app')

@section('content')
<br>
        <div class="card-body">
            <div class="{{action('TareaController@create')}}"class="btn btn-success"
               <hr>
               <center> Mi Tarea </center>
            </div>
            <a href="{{route('tareas.edit',$tarea->id)}}"<button type="button" class="btn btn-primary">Editar Tarea</button> </a>
        </div>

        <table class="table">
            <tr>
                <th>ID </th>
                <th> Tarea </th>
                <th> Fecha inicio </th>
                <th> Fecha Final </th>
                <th> Prioridad </th>
                <th> Estado </th>
            </tr>
            <tr>
            <td>{{$tarea->id}}</td>
            <td>{{$tarea->nombre_tarea}}</td>
            <td>{{$tarea->fecha_inicio}}</td>
            <td>{{$tarea->fecha_termino}}</td>
            <td>{{$tarea->estatus}}</td>
            <td>{{$tarea->prioridad}}</td>
            </tr>



    </body>


</html>


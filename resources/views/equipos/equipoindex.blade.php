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
                <th> equipo </th>
                <th> Integrantes</th>

            </tr>
           @foreach($equipos as $equipo)
            <tr>
            <td>{{$equipo->id}}</td>
            <td>{{$equipo->equipo_nombre}}</td>
            <td>
       {{--         {{ $equipo->users(0)->name}}  Son chorcetes arreglo--}}
                @foreach($equipo->users as $user)
                {{ $user->name }} <br>
                @endforeach
            </td>

            <td>
                <a href = "{{ route()}}">
            </td>
            </tr>
            @endforeach


    </body>


</html>

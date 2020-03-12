@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                            @endforeach
                    </ul>
                </div> {{-- [] --}}
                @endif
                    @isset($tarea)
                    {!! Form::model($equipo,['route' => ['tareas.update',$equipo->id],'method' => 'PATCH'])!!}
                          {{--"{{route('tareas.update',$tarea->id)}}" method="POST"> --}}
                          {{--  @method('PATCH') --}}
                    @else
                    {!! Form::open(['route' => 'tareas.store']) !!}
                       {{-- <form action="{{route('tareas.store')}}" method="POST"> --}}
                    @endisset()
                   <form action="{{route('tareas.store')}}" method="POST">
                       {{-- @csrf --}}
                        <div class="form-group">
                         {!! Form::label('nombre_equipo', 'Equipo') !!}
                         {!! Form::text('nombre_equipo', null, ['class' => 'form-control']) !!}
                            {{--  <label for="nombre_tarea">Tarea</label> --}}
                            {{--    <input type="text" class="form-control" name="nombre_tarea" value="{{ $tarea->nombre_tarea ?? ''}}" id="nombre_tarea" placeholder="Nombre de la tarea"> --}}
                        </div>

                            <label for="user_id">Integrantes</label>
                            {!! Form::select('user_id[]', $users, isset($equipo) ? $equipo->users()->pluck('id') : null, ['class' => 'form-control'])!!}


                        <div> <button type="submit" class="btn btn-primary" >Enviar</button> </div>

                </div>
            </div>
        </div>
    </div>
</div>






    @endsection

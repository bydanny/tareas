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
                    {!! Form::model($tarea,['route' => ['tareas.update',$tarea->id],'method' => 'PATCH'])!!}
                          {{--"{{route('tareas.update',$tarea->id)}}" method="POST"> --}}
                          {{--  @method('PATCH') --}}
                    @else
                    {!! Form::open(['route' => 'tareas.store']) !!}
                       {{-- <form action="{{route('tareas.store')}}" method="POST"> --}}
                    @endisset()
                   <form action="{{route('tareas.store')}}" method="POST">
                       {{-- @csrf --}}
                        <div class="form-group">
                         {!! Form::label('nombre_tarea', 'Tarea') !!}
                         {!! Form::text('nombre_tarea', null, ['class' => 'form-control']) !!}
                            {{--  <label for="nombre_tarea">Tarea</label> --}}
                            {{--    <input type="text" class="form-control" name="nombre_tarea" value="{{ $tarea->nombre_tarea ?? ''}}" id="nombre_tarea" placeholder="Nombre de la tarea"> --}}
                        </div>

                        <div class="form-group">
                          <label for="fecha_inicio">Fecha Inicio</label>
                        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{ $tarea->fecha_inicio ?? ''}}">
                        </div>

                        <div class="form-group">
                            <label for="fecha_termino">Fecha Final</label>
                            <input type="date" class="form-control" name="fecha_termino" id="fecha_termino" value="{{ $tarea->fecha_termino ?? ''}}">
                        </div>


                        <label for="prioridad">Prioridad</label>
                        {!! Form::select('prioridad', [
                            '1' => 'Baja',
                            '2' => 'Media',
                            '3' => 'Alta',],null, ['class' => 'form-control'])!!}

                        {{--  <select multiple class="form-control" id="prioridad" name="prioridad">
                            <option>BAJA 1</option>
                            <option>MEDIA 2</option>
                            <option>ALTA 3</option>
                          </select>
                            --}}

                            <label for="prioridad">Categoria</label>
                            {!! Form::select('categoria_id', $categorias,null, ['class' => 'form-control'])!!}


                        <div> <button type="submit" class="btn btn-primary" >Enviar</button> </div>

                </div>
            </div>
        </div>
    </div>
</div>






    @endsection

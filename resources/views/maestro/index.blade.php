@extends('layout')

@section('title')
    Lista de maestros
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
        <h4>LIsta de maestros</h4><a href="{{ route('maestro.create')}}"><button class="btn btn-success">Añadir Maestro</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Carnet de identidad</th>
                            <th>Nombre</th>
                            <th>Materia</th>
                            <th>Experiencia</th>
                            <th>Unidad Educativa</th>
                            <th>Foto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($maestros as $maestro)
                            @php
                                $count++;
                            @endphp
                            <tr>
                                <th>{{ $count}}</th>
                                <td>{{ $maestro->ci}}</td>
                                <td>{{ $maestro->nombre}}</td>
                                <td>{{ $maestro->materia}}</td>
                                <td>{{ $maestro->experiencia}} Años</td>
                                <td><a href="{{ route('unidad.show', ['id' => $maestro->unidad_educativa->id]) }}">{{ $maestro->unidad_educativa->nombre}}</a></td>
                                <td>{{ $maestro->foto}}</td>
                                <td><a href="{{ route('maestro.edit', ['id' => $maestro->id]) }}"><i class="fa fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
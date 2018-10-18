@extends('layout')

@section('title')
    Lista de maestros
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
            <h4>Table Basic </h4>

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
                                <td><a href="{{ route('unidad.show', ['unidad' => $maestro->unidad_educativa]) }}">{{ $maestro->unidad_educativa->nombre}}</a></td>
                                <td>{{ $maestro->foto}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
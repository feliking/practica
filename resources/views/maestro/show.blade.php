@extends('layout')

@section('title')
    Informacion del Maestro: {{ $maestro->nombre }}
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
            <h4>Maestro</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Carnet de identidad</th>
                            <th>Nombre</th>
                            <th>Materia</th>
                            <th>Experiencia</th>
                            <th>Unidad educativa</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th>{{ $maestro->ci }}</th>
                                <th>{{ $maestro->nombre }}</th>
                                <th>{{ $maestro->materia }}</th>
                                <th>{{ $maestro->experiencia }}</th>
                                <th><a href="{{ route('unidad.show', ['id' => $maestro->unidad_educativa->id]) }}">{{ $maestro->unidad_educativa->nombre }}</a></th>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

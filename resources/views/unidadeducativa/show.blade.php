@extends('layout')

@section('title')
    Informacion de la unidad educativa: {{ $unidadEducativa->nombre }}
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
            <h4>Unidad Educativa </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Distrito</th>
                            <th>Dirección</th>
                            <th>Capacidad</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th>{{ $unidadEducativa->nombre }}</th>
                                <th>{{ $unidadEducativa->distrito }}</th>
                                <th>{{ $unidadEducativa->direccion }}</th>
                                <th>{{ $unidadEducativa->capacidad }}</th>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

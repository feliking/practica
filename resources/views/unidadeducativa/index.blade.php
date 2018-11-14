@extends('layout')

@section('title')
    Lista de Unidades Educativas
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
        <h4>Lista de Unidades Educativas</h4><a href="{{ route('unidad.create')}}"><button class="btn btn-info">Añadir Unidad Educativa</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Distrito</th>
                            <th>Dirección</th>
                            <th>Capacidad</th>
                            <th>Maestro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($unidades as $unidad)
                            @php
                                $count++;
                            @endphp
                            <tr>
                                <th>{{ $count}}</th>
                                <td>{{ $unidad->nombre}}</td>
                                <td>{{ $unidad->distrito}}</td>
                                <td>{{ $unidad->direccion}}</td>
                                <td>{{ $unidad->capacidad}} Años</td>
                                <td>
                                    <ul>
                                    @foreach($unidad->maestros as $maestro)
                                        <li><a href="{{ route('maestro.show', ['maestro' => $maestro]) }}">{{ $maestro->nombre }}</a></li>
                                    @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ route('unidad.show', ['unidad' => $unidad]) }}"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('unidad.edit', ['unidad' => $unidad]) }}"><i class="fa fa-edit"></i></a>
                                    <form method="POST" action="{{ route('unidad.destroy', ['unidad' => $unidad]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="fa fa-trash" value="Eliminar">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
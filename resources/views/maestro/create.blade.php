@extends('layout')

@section('title')
    Agregar nuevo maestro
@endsection

@section('content')
<div class="col-lg-12 text-center">
    <h2>Agregar un nuevo maestro</h2>
</div>
<div class="row">
    <div class="col-lg-12 text-center">
        <form method="POST" action="{{ route('maestro.store') }}">
            @csrf
            <div class="form-group">
                <label for="">Carnet de identidad</label>
                <input type="number" class="form-control" name="ci" value="{{ old('ci') }}">
                @if($errors->has('ci'))
                    <span class="text-danger">{{ $errors->first('ci') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div class="form-group">
                <label for="">Materia</label>
                <input type="text" class="form-control" name="materia" value="{{ old('materia') }}">
            </div>
            <div class="form-group">
                <label for="">Experiencia</label>
                <input type="text" class="form-control" name="experiencia" value="{{ old('experiencia') }}">
            </div>
            <div class="form-group">
                <label for="">Carnet de identidad</label>
                <select name="UnidadEducativa" id="" class="form-control">
                    <option disabled>Selecciona una opcion</option>
                    @foreach ($unidad_educativa as $unidad)
                        <option value="{{ $unidad->id }}">{{ $unidad->nombre }}</option>   
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Registrar">
            </div>
        </form>
    </div>
</div>
@endsection
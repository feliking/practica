@extends('layout')

@section('title')
    Agregar nueva Unidad Educativa
@endsection

@section('content')
<div class="col-lg-12 text-center">
    <h2>Agregar nueva Unidad Educativa</h2>
</div>
<div class="row">
    <div class="col-lg-12 text-center">
        <form method="POST" action="{{ route('unidad.store') }}">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                @if($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Distrito</label>
                <input type="text" class="form-control" name="distrito" value="{{ old('distrito') }}">
                @if($errors->has('distrito'))
                    <span class="text-danger">{{ $errors->first('distrito') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Dirección</label>
                <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
                @if($errors->has('direccion'))
                    <span class="text-danger">{{ $errors->first('direccion') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Capacidad</label>
                <input type="text" class="form-control" name="capacidad" value="{{ old('capacidad') }}">
                @if($errors->has('capacidad'))
                    <span class="text-danger">{{ $errors->first('capacidad') }}</span>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Registrar">
            </div>
        </form>
    </div>
</div>
@endsection
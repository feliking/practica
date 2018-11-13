@extends('layout')

@section('title')
    Editar al maestro con id: {{ $maestro->id }}
@endsection

@section('content')
<div class="col-lg-12 text-center">
    <h2>Editar Maestro</h2>
</div>
<div class="row">
    <div class="col-lg-12 text-center">
        <form method="POST" action="{{ route('maestro.update', ['maestro' => $maestro]) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Carnet de identidad</label>
                <input type="number" class="form-control" name="ci" value="{{ $maestro->ci }}">
                @if($errors->has('ci'))
                    <span class="text-danger">{{ $errors->first('ci') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $maestro->nombre }}">
            </div>
            <div class="form-group">
                <label for="">Materia</label>
                <input type="text" class="form-control" name="materia" value="{{ $maestro->materia }}">
            </div>
            <div class="form-group">
                <label for="">Experiencia</label>
                <input type="text" class="form-control" name="experiencia" value="{{ $maestro->experiencia }}">
            </div>
            <div class="form-group">
                <label for="">Unidad educativa</label>
                <select name="UnidadEducativa" class="form-control">
                    <option value="{{ $maestro->unidad_educativa->id }}">{{ $maestro->unidad_educativa->nombre }}</option>
                    @foreach ($unidad_educativa as $unidad)
                        <option value="{{ $unidad->id }}">{{ $unidad->nombre }}</option>   
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Guardar Cambios">
            </div>
        </form>
    </div>
</div>
@endsection
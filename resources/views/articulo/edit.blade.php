@extends('layouts.plantillabase');

@section('contenido')
<h2>Crear registros</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="codigo" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="codigo" name="cantidad" type="text" class="form-control" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="codigo" name="precio" type="text" class="form-control" value="{{$articulo->precio}}">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">guardar</button>

</form>
@endsection
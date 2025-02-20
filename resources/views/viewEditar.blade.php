@extends('layout.base')
@section('title', 'Editar')
@section('content')
    <div class="card">
        <h5 class="card-header">Editar Usuario</h5>
        <div class="card-body">
            <form class="container" action="" method="POST">
                @csrf
                @method('PUT')
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="name" value="">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" name="edad" value="">
                <br>
                <a href="" class="btn btn-primary">Regresar</a>
                <button class="btn btn-warning" type="submit">Guardar</button>
            </form>
        </div>
    @endsection

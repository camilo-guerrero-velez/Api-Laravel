@extends('layout.base')
@section('title', 'login')
@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card w-25">
            <h5 class="card-header text-center bg-primary text-white">Inicio de Sesión</h5>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
@endsection

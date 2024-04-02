@extends('layouts.Base')

@section('AgregarUsuario')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4> Agregar Usuario</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Los Campos deben Ser Rellenado
                </h5>
            </div>
            <div class="card borde-0">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <form>
                                    <div class="container mt-3">
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">
                                                <form>
                                                    <div class="mb-2">
                                                        <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                                                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="contrasena" class="form-label">Contraseña</label>
                                                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="verificarContrasena" class="form-label">Verificar Contraseña</label>
                                                        <input type="password" class="form-control" id="verificarContrasena" name="verificarContrasena" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
           
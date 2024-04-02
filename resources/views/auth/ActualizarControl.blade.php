@extends('layouts.Base')

@section('ActualizarControl')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Actualizar Equipo General</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    LOS CAMPOS CON* SON REQUERIDOS.
                </h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <div class="card boder-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Datos Genereales
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <!-- Contenido del elemento izquierdo -->
                            <label class="visually-hidden" for="autoSizingSelect">TIPO</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>TIPO</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">MARCA</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>MARCA</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">MODELO</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>MODELO</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">NÚMERO DE SERIE</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>NÚMERO DE SERIE</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-3 pd-2">
                            <label class="visually-hidden" for="autoSizingSelect">HOTEL</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected> HOTEL</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">ID ESTATUS</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>ID ESTATUS</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">SISTEMA
                                OPERATIVO</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>SISTEMA OPERATIVO</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">MEMORIA RAM</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>MEMORIA RAM</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 pd-2">
                                <label class="visually-hidden" for="autoSizingSelect">PROCESADOR</label>
                                <select class="form-select" id="autoSizingSelect">
                                    <option selected> PROCESADOR</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <!-- Contenido del elemento derecho -->
                                <label class="visually-hidden" for="autoSizingSelect">TIPO DE DISCO
                                    DURO</label>
                                <select class="form-select" id="autoSizingSelect">
                                    <option selected>TIPO DE DISCO DURO</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <div class="card boder-0">
                <div class="card-header">
                    <h5 class="card-title">
                        Datos de Facturas
                    </h5>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                <label class="form-check-label" for="flexCheckIndeterminate">
                    Seleccionar si el equipo tiene más de 3 años

                </label>
              </div>
            <div class="col-auto mt-3">
                <button type="submit" class="btn btn-success">GUARDAR</button>
            </div>
            </table>
        </div>
    </div>
</div>
</main>
@endsection
          
       
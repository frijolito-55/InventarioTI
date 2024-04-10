@extends('layouts.Base')

@section('CrearLicencia')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Agregar Nueva licencia</h4>
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
                    <div class="row">
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">DEPARTAMENTO</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>DEPARTAMENTO</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="NOMBRE DE LA LICENCIA" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        <div class="col-4">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="text-number" placeholder="CODIGO DE LICENCIA" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div> 
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <form class="d-flex">
                                <input id="fechaPrestamo" class="form-control form-control-sm me-2"
                                type="search" placeholder="FECHA DE COMPRA" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        <div class="col-3">
                            <form class="d-flex">
                                <input id="fechaDevolucion" class="form-control form-control-sm me-2"
                                type="text" placeholder="FECHA DE VENCIMINIENTO" aria-label="Search" style="width: 220px;">
                            </form>
                        </div>            
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
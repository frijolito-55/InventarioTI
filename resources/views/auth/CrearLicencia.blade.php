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
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="NOMBRE DE LA LICENCIA" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div> 
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
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
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="inputAddress" class="form-label">CANTIDAD DE LICENCIAS</label>
                            <input type="number" class="form-control" id="inputAddress" placeholder="1234 Main St">
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
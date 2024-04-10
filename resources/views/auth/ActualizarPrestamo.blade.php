@extends('layouts.Base')

@section('ActualizarPrestamo')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>ACTUALIZAR PRESTAMO</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Actualizar Préstamo del Colaborador LUISA FERNANDA CASTRO MENDOZA
                </h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <div class="row">
                        <div class="col-3">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="NUMERO DE COLABORADOR" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        <div class="col-3">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="NOMBRE" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <form class="d-flex">
                                <input id="fechaPrestamo" class="form-control form-control-sm me-2"
                                type="search" placeholder="FECHA DE PRESTAMO" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        <div class="col-3">
                            <form class="d-flex">
                                <input id="fechaDevolucion" class="form-control form-control-sm me-2"
                                type="text" placeholder="FECHA DE DEVOLUCIÓN" aria-label="Search" style="width: 220px;">
                            </form>
                        </div>            
                        <div class="col-3">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="NOMBRE DEL EQUIPO" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label class="visually-hidden" for="autoSizingSelect">NOMBRE DE LA PLATAFORMA</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>SELECCIONE LA PLATAFORMA</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCIÓN</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-auto mt-3">
                        <button type="submit" class="btn btn-success">CREAR</button>
                    </div>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
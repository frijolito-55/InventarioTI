@extends('layouts.Base')

@section('ReporteResguardo')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Reportes</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Reporte de Equipos en Resguardo
                </h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <div class="row">
                        <div class="col-3">
                            <!-- Contenido del elemento izquierdo -->
                            <label class="visually-hidden" for="autoSizingSelect">HOTEL</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>HOTEL</option>
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
                            <label class="visually-hidden" for="autoSizingSelect">PROVEEDOR</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>PROVEEDOR</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-3 pd-2">
                            <label class="visually-hidden" for="autoSizingSelect">SISTEMA OPRATIVO</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>SISTEMA OPRATIVO</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">PLATAFORMA</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>PLATAFORMA</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">TIPO DE EQUIPO</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>TIPO DE EQUIPO</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="NOMBRE DE COLABORADOR" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        <div class="col-3 mt-3">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="DEPARTAMENTO" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        <div class="col-3 mt-3">
                            <!-- Contenido del elemento derecho -->
                            <label class="visually-hidden" for="autoSizingSelect">HOTEL DE COLABORADOR</label>
                            <select class="form-select" id="autoSizingSelect">
                                <option selected>HOTEL DE COLABORADOR</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-auto mt-3">
                        <button type="submit" class="btn btn-success">BUSCAR</button>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end sidebar-link">
                        <a class="btn btn-primary" href="#" role="button">GENERAR EXCEL</a>
                    </div>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
           
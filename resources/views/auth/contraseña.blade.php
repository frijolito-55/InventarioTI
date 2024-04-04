@extends('layouts.Base')

@section('contraseña')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Cambiar Contraseña</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Los campos son * requeridos.
                </h5>
            </div>
            <!--ACA SERA EL FORMULARIO DE CAMBIO DE CONTRASEÑA-->
            <div class="card-body">
                <table class="table">
                    <div class="row">
                        <div class="col-3">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="Contraseña Actual" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        <div class="col-3">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="Contraseña Nueva" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                        <div class="col-3">
                            <form class="d-flex">
                                <input class="form-control form-control-sm me-2"
                                type="search" placeholder="Confirmas Contraseña" aria-label="Search" style="width: 220px, 
                                height 150px">
                            </form>
                        </div>
                    <div class="col-6 mt-3">
                        <button type="submit" class="btn btn-success">GUARDAR</button>
                    </div>
                
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
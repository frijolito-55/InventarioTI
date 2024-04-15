@extends('layouts.Base')

@section('VistaLicencia')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Licencias</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    LICENCIAS DE REYNALDA HERNANDEZ ZAMUDIO
                </h5>
            </div>

        </div>
        <div class="card border-0">
            <div class="card-body">
                <table class="table table-striped">
                    <tr class="odd">
                        <tr class="even">
                            <th>Nombre del usuario</th>
                            <td>REYNALDA HERNANDEZ ZAMUDIO</td>
                        </tr>
                    <tr class="even">
                        <th>Nombre Equipo</th>
                        <td>REHERNANDEZ</td>
                    </tr>
                    <tr class="even">
                        <th>Departamento</th>
                        <td>Desarrollo</td>
                    </tr>
                    <th>Fecha de Asignación</th>
                    <td>2024-01-30</td>
                </tr>
                <tr class="even">
                    <th>Fecha de Vencimiento</th>
                    <td>2024-06-30</td>
                </tr>
                    </tbody>
                </table>
                <td class="text-center">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                        <i class="fa-solid fa-id-card fa-2x" style="margin-right: 10px; vertical-align: middle;"></i>
                    </a>
                </td>
                <!--TABLA FLOTANTE-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Asignar Licencias</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col-6">
                                            <select class="form-select" aria-label="size 3 select example">
                                                <option selected>DEPARTAMENTO</option>
                                                <option value="1">One</option>
                                            </select>
                                        </th>
                                        <th scope="col-6">
                                            <select class="form-select" aria-label="size 3 select example">
                                                <option selected>LICENCIA</option>
                                                <option value="1">One</option>
                                            </select>
                                        </th>
                                        <th scope="col-8">
                                            <select class="form-select" aria-label="size 3 select example">
                                                <option selected>CODIGO DE LICENCIA</option>
                                                <option value="1">One</option>
                                            </select>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Inmobiliaria</td>
                                        <td>Auto CAD</td>
                                        <td>CN0R289D7161884NFLFU	</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                <p>
                <div style="word-wrap:break-word;" id="equipo" class="grid-view">
                    <table class="items table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>NOMBRE DEL EQUIPO</th>
                                <th>NOMBRE DE LA LICENCIA</th>
                                <th>FECHA DE VENCIMIENTO</th>
                                <th>
                                    <a>CODIGO DE LICENCIA
                                        <span class="caret">
                                        </span>
                                    </a>
                                </th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td>REHERNANDEZ</td>
                                <td>AUTO CAD</td>
                                <td>06-10-2025</td>
                                <td>CN0R289D7161884NFLFU</td>
                                <td class="button-column text-center">
                                    <a class="baja" title="Baja" rel="tooltip" href="#">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </table>
                </div>
            </div>
        </div>
</main>
@endsection
@extends('layouts.Base')

@section('TranferenciaHotel')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h4>Equipos Generales</h4>
            </div>
            <!-- Table Element -->
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="card-title">
                        Tranferencia de Equipos Entre Hoteles
                    </h5>
                </div>

            </div>
            <div class="card border-0">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">HOTEL
                                    <!--ESTE ES EL BOTON DESPLEGABLE-->
                                    <select class="form-select" aria-label="size 3 select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                    </select>
                                </th>
                                <th scope="col">
                                    <div class="dropup-center dropup"></div>TIPO
                                    <select class="form-select" aria-label="size 3 select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                    </select>
                                </th>
                                <th scope="col">MARCA
                                    <select class="form-select" aria-label="size 3 select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                    </select>
                                </th>
                                <th scope="col">MODELO
                                    <select class="form-select" aria-label="size 3 select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                    </select>
                                </th>
                                <th scope="col">NÚMERO DE SERIE
                                    <form class="d-flex">
                                        <input class="form-control form-control-sm me-2" type="search" placeholder=""
                                            aria-label="Search" style="width: 120px;">
                                    </form>
                                </th>
                                <th scope="col">ID HOTEL CAMBIO
                                    <form class="d-flex">
                                        <input class="form-control form-control-sm me-2" type="search" placeholder=""
                                            aria-label="Search" style="width: 120px;">
                                    </form>
                                </th>

                            </tr>
                        </thead>
                        <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                        <tbody>
                            <tr>
                                <td>MID</td>
                                <td>MONITOR</td>
                                <td>SAMSUNG</td>
                                <td>S19C150F</td>
                                <td>ZYGFH4LD802969K</td>
                                <td>Click to edit</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

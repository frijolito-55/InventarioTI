@extends('layouts.Base')

@section('AceptarTranferencia')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Equipos Generales</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Autorizacion de Transferencias de Equipo Entre Hoteles
                </h5>
            </div>
            
        </div>
        <div class="card border-0">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">TIPO
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                </select>
                            </th>
                            <th scope="col">MARCA
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                </select>
                            </th>
                            <th scope="col">MODELO
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                </select>
                            </th>
                            <th scope="col">NÚMERO DE SERIE
                                <form class="d-flex">
                                    <input class="form-control form-control-sm me-2" type="search" placeholder="" aria-label="Search" style="width: 180px;">
                                </form>
                            </th>
                            <th scope="col">HOTEL
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                </select>
                            </th>
                            <th scope="col">NOMBRE <p> HOTEL DESTINO</p>
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                </select>
                            </th>
                            <th scope="col">Acciones
                                <p>
                                <br>
                            </th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody>
                        <tr>
                            <td>MONITOR</td>
                            <td>DELL</td>
                            <td>E1916H</td>
                            <td>CN099WJF728725C3A32UA00	</td>
                            <td>MPG</td>
                            <td>MID</td>
                            <td class="text-center">
                                <i class="fa-solid fa-circle-check fa-lg" type="submit"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
            

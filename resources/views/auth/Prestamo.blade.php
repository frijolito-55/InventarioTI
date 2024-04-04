@extends('layouts.Base')

@section('Prestamo')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Equipos</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Contro de Prestamo
                </h5>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end sidebar-link">
                    <a class="btn btn-success" href="{{ route ('CrearPrestamo')}}" role="button">CREAR PRESTAMO</a>
                </div>
            </div>
            
        </div>
        <div class="card border-0">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NOMBRE <P>
                                HOTEL
                            </P>
                                <!--ESTE ES EL BOTON DESPLEGABLE-->
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                </select>
                            </th>
                            <th scope="col">DEPARTAMENTO <p></p>
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example">
                                    <option selected></option>
                                    <option value="1">One</option>
                                </select>
                            </th>
                            <th scope="col">NOMBRE <p>
                                </p>
                                <form class="d-flex">
                                    <input class="form-control form-control-sm me-2" type="search"
                                    placeholder="" aria-label="Search" style="width: 120px;">
                                </form>
                            </th>
                            <th scope="col">FECHA<p>PRESTAMO</p>
                                
                            </th>  
                            <th scope="col">FECHA<p>DEVOLUCIÓN</p>
                                
                            </th> 
                            <th scope="col">EQUIPOS <p> EN PRESTAMO</p>

                            </th>
                            <th scope="col">ACCIONES
                                <p></p>
                            </th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody>
                        <tr>
                            <td>MID</td>
                            <td>Desarrollo</td>
                            <td>Raul lopez Barra</td>
                            <td>11-02-2023</td>
                            <td>20-02-2024</td>
                            <td class="text-center">2</td>
                            <td class="text-center">
                                <a href="{{ route('VistaPrestamo') }}">
                                    <i class="fa-solid fa-eye fa-lg"></i>
                                </a>
                            </td>                                   
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
           
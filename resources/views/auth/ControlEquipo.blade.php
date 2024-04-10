@extends ('layouts.Base')

@section('ControlEquipo')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Equipos Generales</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Control de Equipos en Inventario
                </h5>
            </div>
            
        </div>
        <div class="card border-0">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <!--ESTE ES EL BOTON DESPLEGABLE-->
                                <select class="form-select" aria-label="size 3 select example" id="selecthotel" name="hotel">
                                    <option selected value="">HOTEL</option>
                                    
                                </select>
                            </th>
                            <th scope="col">
                                <select class="form-select" aria-label="size 3 select example" id="selectTipo" name="tipo">
                                    <option selected value="">TIPO</option>
                                    
                                </select>
                            </th>
                            <th scope="col">
                                <select class="form-select" aria-label="size 3 select example" id="selectMarca" name="marca">
                                    <option selected value="">MARCA</option>
                                    
                                </select>
                            </th>
                            <th scope="col">
                                <select class="form-select" aria-label="size 3 select example" id="selectModelo" name="modelo">
                                    <option selected value="">MODELO</option>
                                </select>
                            </th>
                            <th scope="col">
                                <select class="form-select" aria-label="size 3 select example" id="selectEstado" name="estado">
                                    <option selected value="">ESTADO</option>
                                    
                                </select>
                            </th>
                            <th scope="col">NÚMERO DE SERIE
                                <form class="d-flex">
                                    <input class="form-control form-control-sm me-2" type="search" placeholder="" aria-label="Search" style="width: 120px;">
                                </form>
                            </th>
                            <th scope="col">Acciones
                                <p>
                                <br>
                            </th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody id="">
                        <tr>
                            <td>CEDIS</td>
                            <td>CPU</td>
                            <td>DELL</td>
                            <td>OPTIPLEX 780</td>
                            <td>BAJA</td>
                            <td>F64V484</td>
                            <td class="text-center">
                                <a href="{{ route ('ActualizarControl')}}">
                                    <i class="fa-solid fa-pencil fa-lg" type="submit"></i>
                                </a>                              
                                <i class="fa-solid fa-trash fa-lg" type="submit"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/filtro.js') }}"></script>
@endsection

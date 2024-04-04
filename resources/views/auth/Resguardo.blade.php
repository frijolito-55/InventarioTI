@extends('layouts.Base')

@section('Resguardo')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Equipos</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Contro de Resguardo
                </h5>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end sidebar-link">
                    <a class="btn btn-success" href="{{ route ('CrearResguardo')}}" role="button">CREAR RESGUARDO</a>
                </div>
            </div>
            
        </div>
        <div class="card border-0">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NOMBRE <P>HOTEL</P>
                                <!--ESTE ES EL BOTON DESPLEGABLE-->
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example" id="hotelSelected" name="hotel">
                                    <option selected value=""></option>
                                </select>
                            </th>
                            <th scope="col">DEPARTAMENTO <p></p>
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example" id="departamentoSelected">
                                    <option selected value=""></option>
                                </select>
                            </th>
                            <th scope="col">NOMBRE <p>
                                COLABORADOR
                                </p>
                                <form class="d-flex">
                                    <input class="form-control form-control-sm me-2" type="search"
                                    placeholder="" aria-label="Search" style="width: 120px;">
                                </form>
                            </th>
                            <th scope="col">NOMBRE<p>EQUIPO</p>
                                <form class="d-flex">
                                    <input class="form-control form-control-sm me-2" type="search"
                                    placeholder="" aria-label="Search" style="width: 120px;">
                                </form>
                            </th>  
                            <th scope="col">EQUIPOS EN <p>
                                RESGUARDO</p>
                            </th>
                            <th scope="col">ACCIONES
                                <p></p>
                            </th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody id="contenido">
                        <td>MID</td>
                        <td>Desarrollo</td>
                        <td>Raul lopez Barra</td>
                        <td>Ralopez</td>
                        <td class="text-center">4</td>
                        <td class="text-center">
                            <a href="{{ route('VistaResguardo') }}">
                                <i class="fa-solid fa-eye fa-lg"></i>
                            </a>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<script>
    var urlVistaResguardo = "{{ route('VistaResguardo') }}";
</script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/filtroResguardo.js') }}"></script>
@endsection
           
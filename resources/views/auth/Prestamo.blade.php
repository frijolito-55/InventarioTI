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
                                <select class="form-select" aria-label="size 3 select example" id="hotelSelected" name="hotel">
                                    <option selected value=""></option>
                                    
                                </select>
                            </th>
                            <th scope="col">DEPARTAMENTO <p></p>
                                <div class="dropup-center dropup"></div>
                                <select class="form-select" aria-label="size 3 select example" id="departamentoSelected" name="depa">
                                    <option selected class=""></option>
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
                    <tbody id="contenido">
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
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              
        </div>
    </div>
</main>
<script>
    var urlVistaPrestamo = "{{ route('VistaPrestamo') }}";
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/prestamos.js') }}"></script>

@endsection
           
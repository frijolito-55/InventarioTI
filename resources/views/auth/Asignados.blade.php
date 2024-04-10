@extends('layouts.Base')

@section('Asignados')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Licencias</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Licencias Asignadas
                </h5>
            </div>
            
        </div>
        <div class="card border-0">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <P>NOMBRE</P>
                            </th>
                            <th scope="col">
                                <P>DEPARTAMENTO</P>
                            </th>
                            <th scope="col">
                               <p>USUARIO</p>
                            </th>
                            <th scope="col">
                                FECHA<p> DE ASIGNACIÓN</p> 
                            </th>  
                            <th scope="col">
                                FECHA<p> DE VENCIMIENTO</p>    
                            </th> 
                            <th scope="col">
                                LICENCIAS <p>ASIGNADAS</p>
                            </th>
                            <th scope="col">ACCIONES
                                <p></p>
                            </th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody>
                        <tr>
                            <td>Raul lopez Barra</td>
                            <td>Desarrollo</td>
                            <td>RABARRA</td>
                            <td>11-02-2023</td>
                            <td>20-02-2024</td>
                            <td class="text-center">2</td>
                            <td class="text-center">
                                <a href="{{ route('VistaLicencia') }}">
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
@endsection
           
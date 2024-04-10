@extends('layouts.Base')

@section('Licencias')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Licencias</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Administrador de Lincias
                </h5>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end sidebar-link">
                    <a class="btn btn-success" href="{{ route ('CrearLicencia')}}" role="button">AGREGAR LICENCIA</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th class="col-2">
                                <label class="visually-hidden" for="autoSizingSelect">AREA</label>
                                <select class="form-select" id="autoSizingSelect">
                                    <option selected>AREA</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </th>
                            <th scope="col">Licencias</th>
                            <th scope="col">Fecha de Compra</th>
                            <th scope="col">Fecha de Vencimineto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody>
                        <tr  class="text-center">
                            <td>Inmobiliaria</td>
                            <td>AutoCad</td>
                            <td>11-02-2024</td>
                            <td>11-04-2025</td>
                            <td>10</td>
                            <td class="text-center">
                                <a href="{{ route ('EditarLicencia')}}">
                                    <i class="fa-solid fa-pencil fa-lg" type="submit"></i>
                                </a>         
                                <a class="baja" title="Baja" rel="tooltip" href="#">
                                    <i class="fa-solid fa-trash"></i>
                                </a>                    
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>Marketing</td>
                            <td>PhotoShop</td>
                            <td>02-02-2024</td>
                            <td>02-04-2025</td>
                            <td>15</td>
                            <td class="button-column text-center">
                                <a href="{{ route ('EditarLicencia')}}">
                                    <i class="fa-solid fa-pencil fa-lg" type="submit"></i>
                                </a> 
                                <a class="baja" title="Baja" rel="tooltip" href="#">
                                    <i class="fa-solid fa-trash"></i>
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
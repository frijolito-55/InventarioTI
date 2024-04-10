@extends('layouts.Base')

@section('dashboard')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Préstamos de Equipos</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Préstamos proximos a vencer
                </h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha de Préstamos</th>
                            <th scope="col">Fecha de Devolución</th>
                            <th scope="col">Nombre de Ingeniero de Soporte</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody>
                        @foreach($prestamos as $prestamo)
                        <tr>
                            <td>{{$prestamo->usuarioNombre .' '. $prestamo->usuarioApellidoPat.' '.$prestamo->usuarioApellidoMat}}</td>
                            <td>{{$prestamo->fecha_prestamo}}</td>
                            <td>{{$prestamo->fecha_devolucion}}</td>
                            <td>{{$prestamo->nombre}}</td>
                            <td>
                                @php
                                // Calcula el tiempo restante en días
                                $fechaDevolucion = new DateTime($prestamo->fecha_devolucion);
                                $fechaActual = new DateTime();
                                $diferencia = $fechaActual->diff($fechaDevolucion);
                                $diasRestantes = $diferencia->format('%r%a');

                                // Determina el estado basado en los días restantes
                                if ($diasRestantes > 0) {
                                    echo $diasRestantes . " días restantes";
                                } else {
                                    echo "Vencido";
                                }
                            @endphp
                            </td>
                            <td class="text-center">
                              <button type="button" class="btn btn-outline-secondary" onclick="confirmarRecuperacion()">
                                Recuperar
                              </button>
                            </td>
                        </tr>
                        @endforeach
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
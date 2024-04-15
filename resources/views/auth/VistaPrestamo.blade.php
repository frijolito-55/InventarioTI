@extends('layouts.Base')

@section('VistaPrestamo')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h4>Equipos</h4>
            </div>
            <!-- Table Element -->
            <div class="card border-0">
                <div class="card-header">
                    @foreach ($datos['responseDatos'] as $dato)
                    <h5 class="card-title">
                        Prestamos de {{$dato->nombreCompleto}}
                    </h5>
                </div>

            </div>
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr class="odd">
                            <th>Fecha Prestamo</th>
                            <td>{{$dato->fecha_prestamo}}</td>
                        </tr>
                        <tr class="even">
                            <th>Fecha Devolución</th>
                            <td>{{$dato->fecha_devolucion}}</td>
                        </tr>
                        <tr class="odd">
                            <th>prorroga</th>
                            <td>{{$dato->proroga}}</td>
                        </tr>
                        <tr class="even">
                            <th>Nombre</th>
                            <td>{{$dato->nombreCompleto}}</td>
                        </tr>
                        <tr class="even">
                            <th>Descripción</th>
                            <td>{{$dato->descripcion}}</td>
                        </tr>
                        <td>CAPTURA DE EQUIPO</td>
                        
                        </tbody>
                    </table>
                    <td class="text-center">
                        <a href="{{ route('ResponsivaPrestamo', ['id' => $dato['id']])}}" style="display: inline-block;">
                            <i class="fa-solid fa-print fa-2x" style="margin-right: 5px; vertical-align: middle;"></i>
                        </a>
                    </td>
                    @endforeach
                    <td class="text-center">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                            <i class="fa-solid fa-computer fa-2x" style="margin-right: 10px; vertical-align: middle;"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('ActualizarPrestamo') }}" style="display: inline-block;">
                            <i class="fa-solid fa-pencil fa-2x" style="margin-right: 5px; vertical-align: middle;"></i>
                        </a>
                    </td>

                    <!--TABLA FLOTANTE-->                    
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Asignar Prestamo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <select class="form-select" aria-label="size 3 select example">
                                                        <option selected>TIPO</option>
                                                        <option value="1">One</option>
                                                    </select>
                                                </th>
                                                <th scope="col">
                                                    <select class="form-select" aria-label="size 3 select example">
                                                        <option selected>MARCA</option>
                                                        <option value="1">One</option>
                                                    </select>
                                                </th>
                                                <th scope="col">
                                                    <select class="form-select" aria-label="size 3 select example">
                                                        <option selected>MODELO</option>
                                                        <option value="1">One</option>
                                                    </select>
                                                </th>
                                                <th scope="col">NÚMERO DE SERIE
                                                    <form class="d-flex">
                                                        <input class="form-control form-control-sm me-2" type="search" placeholder=""
                                                            aria-label="Search" style="width: 120px;">
                                                    </form>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CPU</td>
                                                <td>DELL</td>
                                                <td>OPTIPLEX 780</td>
                                                <td>F64V484</td>
                                            </tr>
                                            <tr>
                                                <td>CPU</td>
                                                <td>DELL</td>
                                                <td>OPTIPLEX 780</td>
                                                <td>F64V484</td>
                                            </tr>
                                            <tr>
                                                <td>CPU</td>
                                                <td>DELL</td>
                                                <td>OPTIPLEX 780</td>
                                                <td>F64V484</td>
                                            </tr>
                                            <tr>
                                                <td>CPU</td>
                                                <td>DELL</td>
                                                <td>OPTIPLEX 780</td>
                                                <td>F64V484</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        <!--INFORMACION DE LA TABLA-->
                    <div style="word-wrap:break-word;" id="equipo" class="grid-view">
                        <table class="items table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>TIPO</th>
                                    <th>MARCA</th>
                                    <th>MODELO</th>
                                    <th>
                                        <a>NÚMERO DE SERIE
                                            <span class="caret">
                                            </span>
                                        </a>
                                    </th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datos['requestTabla'] as $dato)
                                <tr class="odd">
                                    <td>{{$dato->nombreTipoEquipo}}</td>
                                    <td>{{$dato->nombremarca}}</td>
                                    <td>{{$dato->nombreModelo}}</td>
                                    <td>{{$dato->numeroSerie}}</td>
                                    <td class="button-column text-center">
                                        <a class="baja" title="Baja" rel="tooltip" href="#">
                                          <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </table>
                    </div>
                </div>
            </div>
    </main>
@endsection

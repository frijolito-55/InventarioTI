@extends ('layouts.Base')

@section('CapturaInventario')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h4>Equipo Generales</h4>
            </div>
            <!-- Table Element -->
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="card-title">
                        Captura de Inventario
                    </h5>
                </div>
                <!--ACA ESTARA EL FILTRO Y LA TABLA-->
                <div class="card border-0">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <!--ESTE ES EL BOTON DESPLEGABLE-->
                                        <select class="form-select-sm" aria-label="Default select example">
                                            <option selected>SELECCIONE EL TIPO</option>
                                        </select>
                                    </th>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

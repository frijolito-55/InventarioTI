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
                        <tr  class="text-center">
                            <th scope="col">Licencia</th>
                            <th scope="col">Fecha de Compra</th>
                            <th scope="col">Fecha de Vencimineto</th>
                            <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody>
                        <tr  class="text-center">
                            <td>AutoCad</td>
                            <td>11-02-2024</td>
                            <td>11-04-2025</td>
                            <td>10</td>
                        </tr>
                        <tr class="text-center">
                            <td>PhotoShop</td>
                            <td>02-02-2024</td>
                            <td>02-04-2025</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection   
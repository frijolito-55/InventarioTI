@extends ('layouts.Base')

@section('Administrador')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Administrador</h4>
        </div>
        <!-- Table Element -->
        <div class="card border-0">
            <div class="card-header">
                <h5 class="card-title">
                    Usuarios-TI
                </h5>
            </div>
            
        </div>
        <div class="card border-0">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">
                                <P>NOMBRE</P>
                            </th>
                            <th scope="col">
                               <p>USUARIO</p>
                            </th>
                            <th scope="col">ACCIONES
                                <p></p>
                            </th>
                        </tr>
                    </thead>
                    <!--ACA ESTA EL EJEMPLO DE COMO SE VERA LA TABLA-->
                    <tbody>
                        <tr class="text-center">
                            <td>Raul lopez Barra</td>
                            <td>RABARRA</td>
                            <td class="button-column text-center">
                                <a class="baja" title="Baja" rel="tooltip" href="#">
                                    <i class="fa-solid fa-trash"></i>
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
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/prueba.css') }}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!--ESTE ES EL MENU DESPLEGABLE-->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="{{ asset('auth/dashboard') }}">Inventario TI</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ asset('auth/dashboard')}}" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Prestamo
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-computer"></i>
                            Equipos Generales
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route('ControlEquipo') }}" class="sidebar-link">Control de Equipos</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route ('CapturaInventario')}}" class="sidebar-link">Captura de Inventario</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route ('TransferenciaHotel')}}" class="sidebar-link">Tranferencia Entre Hoteles</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route ('AceptarTransferencia')}}" class="sidebar-link">Aceptar Tranferencia Entre Hoteles</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-desktop"></i>
                            Equipos
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route ('Resguardo')}}" class="sidebar-link">Resguardo</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route ('Prestamo')}}" class="sidebar-link">Prestamo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#reporte"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines"></i>
                            Reportes
                        </a>
                        <ul id="reporte" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="{{ route ('ReporteResguardo')}}" class="sidebar-link">Resguardo</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route ('ReportePrestamo')}}" class="sidebar-link">Prestamo</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route ('SinAsignar')}}" class="sidebar-link">Equipo sin asignar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#licencia"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-id-card"></i>
                            Licencias
                        </a>
                        <ul id="licencia" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">op</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">op</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">op</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route ('AgregarUsuario') }}" class="sidebar-link">
                            <i class="fa-solid fa-user"></i>
                            Agregar Usuario
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!--ESTE ES LA BARRA SUPERIOR-->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="{{ asset('img/profile.jpg') }}" class="avatar img-fluid rounded"
                                    alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="{{ route('contraseña') }}" class="dropdown-item">Cambiar Contraseña</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
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
                                <a href="{{ route ('CrearPrestamo')}}">Crear Prestamo</a>
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
                                            <select class="form-select" aria-label="size 3 select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                            </select>
                                        </th>
                                        <th scope="col">DEPARTAMENTO <p></p>
                                            <div class="dropup-center dropup"></div>
                                            <select class="form-select" aria-label="size 3 select example">
                                                <option selected></option>
                                                <option value="1">One</option>
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
                                <tbody>
                                    <tr>
                                        <td>MID</td>
                                        <td>Desarrollo</td>
                                        <td>Raul lopez Barra</td>
                                        <td>11-02-2023</td>
                                        <td>20-02-2024</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">
                                            <i class="fa-solid fa-eye fa-lg" type="submit"></i>
                                        </td>                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>@THEPALACECOMPANY</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/prueba.js') }}"></script>
</body>

</html>

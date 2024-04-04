<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <link rel="icon" href="{{ asset('img/icono.png') }}" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTARIO-TI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/prueba.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>

<body
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
                                <a href="{{ route ('Licencias')}}" class="sidebar-link">Control de Licencias</a>
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
            
            @yield('AgregarUsuario') @section('AgregarUsuario')
            @yield('contraseña') @section('contraseña')

            @yield('dashboard') @section('dashboard')
            @yield('ControlEquipo') @section('dashboard')
            @yield('ActualizarControl') @section ('ActualizarControl')
            @yield('CapturaInventario') @section('CapturaInventario')
            @yield('TranferenciaHotel') @section('TranferenciaHotel')
            @yield('AceptarTranferencia') @section('AceptarTranferencia')
            @yield('Resguardo') @section('Resguardo')
            @yield('VistaResguardo') @section('VistaResguardo')
            @yield('CrearResguardo') @section('CrearResguardo')
            @yield('Prestamo') @section('Prestamo')
            @yield('ActualizarResguardo') @section('ActualizarResguardo')
            @yield('CrearPrestamo') @section('CrearPrestamo')
            @yield('VistaPrestamo') @section('VistaPrestamo')
            @yield('ActualizarPrestamo') @section('ActualizarPrestamo')
            @yield('ReporteResguardo') @section('ReporteResguardo')
            @yield('ReportePrestamo') @section('ReportePrestamo')
            @yield('SinAsignar') @section('SinAsignar')
            @yield('Licencias') @section('Licencias')
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
    <script src=" {{ asset('js/asignarequipo.js') }}"></script>
    <script src="{{ asset ('js/date.js') }}"></script>

</body>

</html>

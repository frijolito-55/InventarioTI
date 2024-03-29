@extends('auth.dashboard')
<!--MENU-->
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
                <a href="{{ asset('auth/dashboard') }}" class="sidebar-link">
                    <i class="fa-solid fa-list pe-2"></i>
                    Prestamo
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse"
                    aria-expanded="false"><i class="fa-solid fa-computer"></i>
                    Equipos Generales
                </a>
                <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{ route('ControlEquipo') }}" class="sidebar-link">Control de Equipos</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('CapturaInventario') }}" class="sidebar-link">Captura de Inventario</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('TransferenciaHotel') }}" class="sidebar-link">Tranferencia Entre Hoteles</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('AceptarTransferencia') }}" class="sidebar-link">Aceptar Tranferencia Entre
                            Hoteles</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                    aria-expanded="false"><i class="fa-solid fa-desktop"></i>
                    Equipos
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{ route('Resguardo') }}" class="sidebar-link">Resguardo</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('Prestamo') }}" class="sidebar-link">Prestamo</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#reporte" data-bs-toggle="collapse"
                    aria-expanded="false"><i class="fa-solid fa-file-lines"></i>
                    Reportes
                </a>
                <ul id="reporte" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="{{ route('ReporteResguardo') }}" class="sidebar-link">Resguardo</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('ReportePrestamo') }}" class="sidebar-link">Prestamo</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('SinAsignar') }}" class="sidebar-link">Equipo sin asignar</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#licencia" data-bs-toggle="collapse"
                    aria-expanded="false"><i class="fa-solid fa-id-card"></i>
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
                <a href="{{ route('AgregarUsuario') }}" class="sidebar-link">
                    <i class="fa-solid fa-user"></i>
                    Agregar Usuario
                </a>
            </li>
        </ul>
    </div>
</aside>

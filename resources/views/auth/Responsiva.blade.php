<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" href="{{ asset('img/icono.png') }}" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsiva</title>
    <style>
        .espacio {
            padding-bottom: 30%;
            /* Salto de línea con relleno inferior */
        }

        .espacio2 {
            padding-bottom: 3%;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="row">
                <!--<style>
                    .container{
                        margin-top:5%;
                    }
                </style>-->
                <div>
                    <style>
                        .img {
                            max-width: 90%;
                            /* Ajustar imagen al ancho del contenedor */
                            height: auto;
                            /* Mantener proporción de la imagen */
                        }

                        .contenedor {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            padding-top: 8%;
                        }
                    </style>
                    <div class="contenedor">
                        <img class="img" src="{{ asset('img/icono.png') }}">
                    </div>
                </div>

                <div class="container mt-2">
                    <table cellpadding="0" cellspacing="0" border="0" width="900" align="center" id="resguardos"
                        style="font-family: sans-serif;">
                        <thead>
                            <tr class="texto" style="text-transform: uppercase; font-weight: bold;">
                                <td id="encabezado"
                                    style="border-bottom: 2px #dddddd solid; border-top: 2px #dddddd solid;">
                                    <div class="text-center">
                                        <h2 class="mb-0">Tecnología de la Información</h2>
                                        <h3 class="mb-3">Resguardo de Equipo de Cómputo</h3>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="container mt-4">
                <table class="table">
                    <thead>
                        <div class="espacio2">
                            <tr>
                                
                                <th>{{ $datos['resguardos']->first()->nombreCompleto }}</th>
                                <th>{{ $datos['resguardosTabla']->first()->nombreHotel }}</th>
                                <th>{{ $datos['resguardos']->first()->nombredepartamento }}</th>
                                <th>NOMBRE EQUIPO: {{ $datos['resguardos']->first()->nombreEquipo }}</th>
                            </tr>
                        </div>
                </table>
                <div class="espacio2">
                    <span style="font-size 14px :small;font-family: sans-serif;">Recibí en resguardo los equipos que a
                        continuación se describen:</span>
                </div>
            </div>
            <div class="container mt-4">
                <table class="table table-striped table-bordered">
                    <!-- Datos de la tabla -->
                    <tbody>
                        @foreach($datos['resguardosTabla'] as $dato)
                        <tr>
                            <td>{{$dato->nombreTipoEquipo}}</td>
                            <td>{{$dato->nombremarca}}</td>
                            <td>{{$dato->nombremodelo}}</td>
                            <td>{{$dato->numeroSerie}}</td>
                        </tr>
                        @endforeach
                        <!-- Agrega más filas según sea necesario -->
                    </tbody>
                </table>
                <!--Comentario que segrega al crear el resguardo-->
                <div class="espacio2">
                    <p style="font-size 14px :small; font-family: sans-serif;">
                    
                    </p>
                </div>
                <div class="espacio2">
                    <p align="justify" style="font-size 14px :small; font-family: sans-serif;">
                        Acepto que he recibido equipo y
                        accesorios que se describen,
                        estoy obligado a conservarlos en buen estado, deberé utilizarlo
                        exclusivamente para actividades laborales asignadas e informar al
                        área de Soporte Tecnico cualquier avería o falla que pueda
                        presentarse durante la operación normal del equipo, cuando la empresa
                        así lo requiera podrá revisarlo para validar su estado por lo que
                        deberé mantenerlo y resguardarlo adecuadamente en mi centro de trabajo,
                        aceptare la responsabilidad por mal uso o daño que pueda ocasionarle.
                    </p>
                    <br>
                    <p align="justify" style="font-size 14px :small; font-family: sans-serif;">
                        Hereby, I accept that I have received the equipment and accessories described herein,
                        and I am obliged to maintain them in good condition, and I must use them exclusively for
                        the assigned work activities and inform the Technical Support area about any breakdown or
                        failure that may occur during the regular operation of them.
                        The company can request an inspection of the equipment anytime, in order to validate its
                        status and hence, I must maintain it and keep it safely in my work place. I will accept
                        any liability resulting from the misuse or damage to it.
                    </p>
                </div>

                <table width="100%" cellpadding="0" cellspacing="0" border="0" class="texto"
                    style="font-weight:bold;">
                    <tbody>
                        <div class="espacio">
                            <tr style="height:70;vertical-align:bottom;text-align:center;">
                                <td width="40%"><span>{{ $datos['resguardos']->first()->idColaboradorEmpleado }}</span>&nbsp;&nbsp;/&nbsp;&nbsp;<span
                                        id="NombreC">{{ $datos['resguardos']->first()->nombreCompleto }}</span></td>
                                <td width="40%"><span>{{ $datos['nombreUsuario']}}</span></td>
                            </tr>
                            <tr>
                                <td align="center" style="border-top:2px solid #dddddd;">Firma del Colaborador</td>
                                <td align="center" style="border-top:2px solid #dddddd;">Firma de Soporte Técnico </td>
                            </tr>
                        </div>
                    </tbody>
                </table>
            </div>

            <!-- Otro contenido de tu página -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <div style="position:absolute; bottom:0;">
                <span><strong>Fecha: </strong><?php echo date("d-m-Y"); ?></span>
            </div>
</body>

</html>

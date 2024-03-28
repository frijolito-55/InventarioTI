<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE INVENTARIO TI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="container">
               
            </div>
            <style>
               .img-fluid{
                margin-top: 150px;
               }
               .titulo{
                    margin-top: 150px;
                    text-align: center;
                }
                
            </style>
                
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-4 text-left logo-container">
                            <img src="{{ asset('img/logo.png') }}" width="90" height="70" class="img-fluid" alt="Logo">
                        </div>
                        <div class="titulo">
                            <h3>Tecnología de la Información</h3>
                            <h4>Resguardo de equipo de cómputo</h4>
                        </div>
                    </div>
                </div>
                  
            </div>  
        </div>
        <div class="container mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>CEDIS</th>
                        <th>DEPARTAMENTO</th>
                        <th>NOMBRE EQUIPO:</th>
                    </tr>
            </table>
            <span style="font-size 14px :small;font-family: sans-serif;">Recibí en resguardo los equipos que a
                continuación se describen:</span>
        </div>

        <div class="container mt-4">
            <table class="table table-striped table-bordered">
                <!-- Datos de la tabla -->
                <tbody>
                    <tr>
                        <td>MONITOR</td>
                        <td>DELL</td>
                        <td>2208WFP</td>
                        <td>No.Serie:</td>
                        <td>CN0R289D7161884NFLFU</td>
                    </tr>
                    <tr>
                        <td>MONITOR</td>
                        <td>DELL</td>
                        <td>2208WFP</td>
                        <td>No.Serie:</td>
                        <td>CN0R289D7161884NFLFU</td>
                    </tr>
                    <tr>
                        <td>MONITOR</td>
                        <td>DELL</td>
                        <td>2208WFP</td>
                        <td>No.Serie:</td>
                        <td>CN0R289D7161884NFLFU</td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
            <!--Comentario que segrega al crear el resguardo-->
            <p style="font-size 14px :small; font-family: sans-serif;">
                SE ENTREGA ESCANNER SYMBOL 9209000501858
            </p>
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
            <br>
            <br>
            <table width="100%" cellpadding="0" cellspacing="0" border="0" class="texto"
                style="font-weight:bold;">

                <tbody>
                    <tr style="height:70;vertical-align:bottom;text-align:center;">
                        <td width="40%"><span>356</span>&nbsp;&nbsp;/&nbsp;&nbsp;<span id="NombreC">REYNALDA
                                HERNANDEZ ZAMUDIO</span></td>
                        <td width="40%"><span>Jose Sanchez</span></td>
                    </tr>
                    <tr>
                        <td align="center" style="border-top:2px solid #dddddd;">Firma del Colaborador</td>
                        <td align="center" style="border-top:2px solid #dddddd;">Firma de Soporte Técnico </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Otro contenido de tu página -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <span><strong>Fecha: </strong> 27-03-2024</span>
</body>

</html>

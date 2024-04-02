<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="{{ asset ('img/icono.png')}}" alt="">
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>  INVENTARIO TI </header>
                        <div class="input-field">
                            <input type="text" class="input" id="user" required="" autocomplete="off">
                            <label>Usuario</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="pass" required="">
                            <label for="pass">Contraseña</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Iniciar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

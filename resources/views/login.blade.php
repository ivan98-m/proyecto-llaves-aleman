<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}"> --}}
</head>
<body>
    <div class="grid-container">
        <div class="redes">
            estas son las redes
        </div>
        <div class="login">
            <img class="imagen-logo" src="./img/logo.png" alt="">
            <form action="">
                <div class="login-form">
                   <div class="campo-entrada">
                        <label for="username">Usuario</label>
                        <input class="" type="text" placeholder="Username" id="username" >
                        <label for="pasword">Contraseña</label>
                        <input type="password" placeholder="Password" id="password">
                   </div>
                    <div class="nose">
                        <div class="recordar">
                            <input type="checkbox">
                            <label for="">Recordarme</label>
                        </div>
                        <div class="forgot-password">
                            <a href="#">Olvido su contraseña?</a>
                        </div>
                    </div>
                    <button class="submit">login</button>
                </div>
            </form>
            <div class="contactos">
                <div>Taller Alemán</div>
                <div>318 3113608 - 3174553623</div>
                <div>Carrera 20 A No. 17-37 San Juan de Pasto</div>
                <div>Horarios: 7:30 am - 8 pm</div>
            </div>
        </div>
    </div>
</body>
</html>
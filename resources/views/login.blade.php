<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,400;0,600;0,800;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/832b6972f7.js" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}"> --}}
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

</head>
<body>
    <section class="container">
        <aside class="side-section">
            <a href="" class="social-item instagram">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="" class="social-item facebook">
                <i class="fab fa-facebook "></i>
            </a>
            <a href="" class="social-item whatsapp">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
            <a href="" class="social-item telegram">
                <i class="fa fa-telegram" aria-hidden="true"></i>
            </a>
            <!-- <div class="social">
                
            </div> -->
            <div class="gallery">
                <div class="item1 item"><img src="" alt=""></div>
                <div class="item2 item"><img src="" alt=""></div>
            </div>
        </aside>
        
        <aside class="login-section">
            <div class="login-container">
                <div class="logo">
                    <img src="./img/logo.png" alt="" class="logo_img">
                </div>
                <form action="" method="" class="login-form">
                        
                    <label for="email" class="login-label">Usuario</label>
                    <input type="text" name="email" class="login-form_input" placeholder="Caracteres alfanumericos" autocomplete="off" id="user">
                
                    <label for="pass" class="login-label">Contraseña</label>
                    <input type="password" name="pass" class="login-form_input" placeholder="Min 8 caracteres" 
                    autocomplete="off" id="pass">

                    <div class="row-form">
                        <input type="checkbox">
                        <label for="pass" class="login-label">Recordarme</label>
    
                        <a href="#" class="forgot-pass">Olvidó su contraseña?</a>
                    </div>
                    <input type="submit" value="Login" class="login-button">
                </form>
            </div>
            <div class="info-text">
                <span>Taller alemán</span>
                <span><i class="fas fa-phone"></i>318 3113608 - 3174553623</span>
                <span><i class="fas fa-map-marker-alt"></i>Carrera 20 A No. 17-37 </span>
                <span>San Juan de Pasto</span>
                <span><i class="fas fa-clock"></i>Horarios: 7:30 am - 8 pm</span>
            </div>
        </aside>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceducap</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
	<link rel="icon" type="image/png" href="/build/img/ICO.png">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img class="logo" src="build/img/logo.svg" alt="Logo tipo de Ceducap">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/bars-solid.svg" alt="menu">
                </div>

                <nav class="navegacion">
                <?php 
                $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
                if( $url_actual === 'http://localhost/login'){ ?>
                    
                <?php }  else{ ?>
                    <a href="#informacion">Información</a>
                    <a href="#somos">¿Quienes Somos?</a>
                    <a href="#contacto">Contacto</a>
                    <a href="/login">Iniciar Sesion</a>
                <?php } ;?>
                </nav>

            </div> <!--Cierre de la barra  -->

        </div>
    </header>

    <?php echo $contenido; ?>
    
    <footer class="footer seccion">
        <div class="contenedor cotenido-footer">
            <div class="ubicacion">
                <h3>Telefonos</h3>
                <span> <a href="https://wa.me/+525565362096?text=Me%20interesa%20inscribirme,%20me%20gustaria%20recibir%20la%20informacion" target="_blank"><img src="/build/img/whats.ico" alt=""> 55-65-36-20-96</a></span>
                <span><img src="/build/img/phone-solid.svg" alt=""> 55-90-16-14-07</span>
                <span><img src="/build/img/phone-solid.svg" alt=""> 55-65-36-14-08</span>
            </div>
            <div class="ubicacion">
                <h3>Ubicacion</h3>
                <span><img src="/build/img/location-dot-solid.svg" alt=""> Local comercial avenida Jalisco MZ23 Lote 4A Colonia Adolfo López Mateos código postal 52910 Municipio de Atizapán de Zaragoza.</span>
            </div>
            <div class="ubicacion">
                <h3>Correo</h3>
                <span><img class="ima" src="/build/img/envelope-solid.svg" alt=""> info@ceducap.org</span>
            </div>
           
            <div class="ubicacion">
                <h3>Aviso de Privacidad</h3>
                <span><a href="/build/img/AvisoPrivacidad3.pdf" target="_blank">Aviso de Privacidad</a></span>
            </div>

        </div>
    </footer>

<?php 
    echo $script ?? '';
?>
</body>
</html>
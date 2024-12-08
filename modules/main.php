<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CIACyT</title>
    <link rel="icon" type="image/png" href="../resources/olympic-flame.ico"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        function initframes()
        {
            //alert('Acá ando!');

            var w = window.innerWidth
                || document.documentElement.clientWidth
                || document.body.clientWidth;

            var h = window.innerHeight
                || document.documentElement.clientHeight
                || document.body.clientHeight;


            document.getElementById("divheader").style.top = 0;
            document.getElementById("divheader").style.height = 0;
            document.getElementById("divheader").style.width = (w - 5) + "px";
            document.getElementById("divheader").style.height = "40px";

        }

        /*function updateWindowSize() {
            const windowSize = `${window.innerWidth} x ${window.innerHeight}`;
            document.getElementById('windowSize').textContent = windowSize;
        }*/

        window.addEventListener('resize', initframes);

        // Llamada inicial para mostrar el tamaño de la ventana al cargar la página
        updateWindowSize();


        function goLogin()
        {
            document.location = "login.php";
        }

    </script>
    <style>

        @font-face {
            font-family: Montserrat-Bold;
            src: url('../fonts/montserrat/Montserrat-Bold.ttf');
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .divHeader
        {
            border: 1px solid #DCDCDC9E;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #2c3e50;
        }

        .seccion-degradado {
            width: 300px;
            height: 200px;
            background: linear-gradient(to left, white, #4CAF50);
            border-radius: 20px;
        }

        .header
        {
            background-color: #4CAF50;
            opacity: 0.4;
            height: 120px;
            width:100%;
            text-align : right;
        }

        .seccionLogo
        {
            height: 300px;
            background-image: url('../resources/SeccionLogo.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: auto;
            display: flex;
        }

        .svg
        {
            cursor:pointer;
            color:#ffffff;
        }

        .contenedor-seccion {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 40px;
            background-color: #f4f4f4;
        }

        .recuadro {
            flex: 1;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 25px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .recuadroSinConvVigente
        {
            padding: 25px;
            text-align: center;            
        }

        .recuadro:hover {
            transform: scale(1.05);
        }

        .recuadro h2 {
            color: #2c3e50;
            margin-bottom: 15px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        .recuadro p {
            color: #7f8c8d;
        }


        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 40px 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .redes-sociales {
            display: flex;
            gap: 20px;
        }

        .redes-sociales a {
            color: white;
            font-size: 30px;
            transition: color 0.3s ease;
        }

        .redes-sociales a:hover {
            color: #3498db;
        }

        .seccion-suscripcion {
            max-width: 400px;
        }

        .formulario-suscripcion {
            display: flex;
        }

        .email-input {
            flex-grow: 1;
            padding: 10px;
            border: none;
            border-radius: 4px 0 0 4px;
        }

        .boton-submit {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .boton-submit:hover {
            background-color: #2980b9;
        }

    </style>


</head>
<body onload="initframes()">

    <div class="divHeader" id="divheader" >

        <table style="width:100%; height: 98%; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
            <tr>
                <td></td>
                <td style="font-size: 18px; "></td>
                <td style="width:95px;">
                    <i class="fa-solid fa-user" width="16px" onclick="goLogin()" style="cursor:pointer; color:#ffffff;"></i>
                    &nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-gear" width="16px" style="cursor:pointer; color:#ffffff;"></i>
                </td>
            </tr>
        </table>
    </div>
    
    <section class="seccionLogo">
    </section>
    <br /><br /><br />


    <section class="seccionConVigente">
        <div class="recuadroSinConvVigente">    
            <img src="../resources/SinConvoVigente.png" width="40%"/>
        </div>
    </section>
    <br /><br /><br />


    <section class="contenedor-seccion">
        <div class="recuadro">
            <h2>¿Quiénes somos?</h2>
            <p>Somos una institución dedicada a la investigación científica y tecnológica, comprometida con el avance del conocimiento y la innovación.</p>
        </div>
        <div class="recuadro">
            <h2>Directorio del CIACyT</h2>
            <p>Conoce a los profesionales e investigadores que lideran nuestra institución y guían nuestros proyectos de investigación.</p>
        </div>
        <div class="recuadro">
            <h2>Convocatorias Anteriores</h2>
            <p>Explora las convocatorias de investigación que hemos realizado en años anteriores y descubre nuestra trayectoria académica.</p>
        </div>
    </section>

    <br /><br /><br />
    <footer class="footer">
        <div class="redes-sociales">
            <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
        
        <div class="seccion-suscripcion">
            <h3>Suscríbete a Nuestro Boletín</h3>
            <form id="formulario-suscripcion" class="formulario-suscripcion" onsubmit="return validarEmail()">
                <input type="email" id="email-suscripcion" class="email-input" placeholder="Ingresa tu correo electrónico" required>
                <button type="submit" class="boton-submit">Suscribir</button>
            </form>
        </div>
    </footer>


    <script>
        function validarEmail() {
            const emailInput = document.getElementById('email-suscripcion');
            const email = emailInput.value;
            
            // Expresión regular para validación de correo electrónico
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            
            if (emailRegex.test(email)) {
                alert('¡Gracias por suscribirte!');
                return true;
            } else {
                alert('Por favor, ingresa un correo electrónico válido.');
                return false;
            }
        }
    </script>
</body>
</html>
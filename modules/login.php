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
            document.getElementById("divheader").style.width = (w - 2) + "px";
            document.getElementById("divheader").style.height = "40px";


            const myH = (parseInt(document.getElementById("divheader").style.height) + 20);
            document.getElementById("banner").style.position = "Absolute";
            document.getElementById("banner").style.top = myH + "px";
            document.getElementById("banner").style.width = (w * .95) + "px";
            document.getElementById("banner").style.height = (h * .3) + "px";


        }

        /*function updateWindowSize() {
            const windowSize = `${window.innerWidth} x ${window.innerHeight}`;
            document.getElementById('windowSize').textContent = windowSize;
        }*/

        window.addEventListener('resize', initframes);

        // Llamada inicial para mostrar el tamaño de la ventana al cargar la página
        updateWindowSize();


        function goHome()
        {
            document.location = "main.php";
        }

    </script>
    <style>

        @font-face 
        {
            font-family: Montserrat-Bold;
            src: url('../fonts/montserrat/Montserrat-Bold.ttf');
        }

        body 
        {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .divHeader
        {

            border: 1px solid #DCDCDC9E;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #2c3e50;
            color: #ffffff;
        }

        .contenedor-login 
        {
            display: flex;
            width: 900px;
            background-color: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .formulario-login 
        {
            width: 50%;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .imagen-login 
        {
            width: 50%;
            background-image: url('../resources/LogoIngreso.png');
            background-size: 90%;
            background-repeat: no-repeat;
            background-position: center;
        }

        h2 
        {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .input-grupo 
        {
            margin-bottom: 15px;
        }

        .input-grupo label 
        {
            display: block;
            margin-bottom: 5px;
            color: #34495e;
        }

        .input-grupo input 
        {
            width: 100%;
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        .input-grupo input:focus 
        {
            outline: none;
            border-color: #3498db;
        }

        .boton-login 
        {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .boton-login:hover 
        {
            background-color: #2980b9;
        }

        .enlaces-adicionales 
        {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            font-size: 0.9em;
        }

        .enlaces-adicionales a 
        {
            color: #3498db;
            text-decoration: none;
        }

        .error-mensaje 
        {
            color: red;
            font-size: 0.8em;
            margin-top: 5px;
            display: none;
        }

        .footer 
        {
            background-color: #2c3e50;
            color: white;
            padding: 40px 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .redes-sociales 
        {
            display: flex;
            gap: 20px;
        }

        .redes-sociales a 
        {
            color: white;
            font-size: 30px;
            transition: color 0.3s ease;
        }

        .redes-sociales a:hover 
        {
            color: #3498db;
        }

        .seccion-suscripcion 
        {
            max-width: 400px;
        }

        .formulario-suscripcion 
        {
            display: flex;
        }

        .email-input 
        {
            flex-grow: 1;
            padding: 10px;
            border: none;
            border-radius: 4px 0 0 4px;
        }

        .boton-submit 
        {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .boton-submit:hover 
        {
            background-color: #2980b9;
        }

    </style>


</head>
<body onload="initframes()">

    <div class="divHeader" id="divheader" >

        <table style="width:100%; height: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
            <tr>
                <td></td>
                <td style="font-size: 18px; ">Consorcio Internacional para el Avance de la Ciencia y la Tecnología</td>
                <td style="width:95px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16px" class="svg"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"/></svg>
                    <i class="fa-solid fa-user" color=""></i>
                    &nbsp;&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  width="16px" onclick="enterAdmin()" class="svg"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                </td>
            </tr>
        </table>
    </div>
    
    <br /><br /><br />

    <div class="contenedor-login">
        <div class="formulario-login">
            <h2><i class="fa-solid fa-house" onclick="goHome()" alt="Regresar a inicio..."></i></h2>
            <form id="login-form" onsubmit="return validarFormulario()">
                <div class="input-grupo">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required placeholder="usuario@ejemplo.com">
                    <div id="email-error" class="error-mensaje">
                        Por favor, ingrese un correo electrónico válido
                    </div>
                </div>
                <div class="input-grupo">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required placeholder="Contraseña">
                    <div id="password-error" class="error-mensaje">
                        La contraseña debe tener al menos 8 caracteres
                    </div>
                </div>
                <button type="submit" class="boton-login">Iniciar Sesión</button>
                <div class="enlaces-adicionales">
                    <a href="#" onclick="recuperarContrasena()">¿Olvidaste tu contraseña?</a>
                    <a href="#" onclick="registrarse()">Registrarse</a>
                </div>
            </form>
        </div>
        <div class="imagen-login"></div>
    </div>


    <script>
        function validarEmail(email) 
        {
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return emailRegex.test(email);
        }

        function validarFormulario() 
        {
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');
            
            let esValido = true;

            // Validar email
            if (!validarEmail(email.value)) {
                emailError.style.display = 'block';
                email.style.borderColor = 'red';
                esValido = false;
            } else {
                emailError.style.display = 'none';
                email.style.borderColor = '#bdc3c7';
            }

            // Validar contraseña
            if (password.value.length < 8) {
                passwordError.style.display = 'block';
                password.style.borderColor = 'red';
                esValido = false;
            } else {
                passwordError.style.display = 'none';
                password.style.borderColor = '#bdc3c7';
            }

            return esValido;
        }

        function recuperarContrasena() 
        {
            alert('Funcionalidad de recuperación de contraseña');
        }

        function registrarse() 
        {
            alert('Funcionalidad de registro de nuevo usuario');
        }
    </script>


</body>
</html>
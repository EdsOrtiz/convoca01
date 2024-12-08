<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CIACyT</title>
    <link rel="icon" type="image/png" href="../resources/olympic-flame.ico"/>

    <link href="../resources/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
    <link href="../resources/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../resources/fontawesome-free-5.3.1-web/css/all.css" rel="stylesheet" />
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


        function loginScreen()
        {
            document.location = "login.html";
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
            background-color: #aaaaaa;
            background-image: linear-gradient(to bottom right, #0474ce, #0474ce);
            header:200px;
            

        }

        .animated-button {
            background: #ffffff;
            color: #488748;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.5s ease;
        }

        .animated-button:hover {
            background: #488748;
            color: white;
        }

        .seccion-degradado {
            width: 300px;
            height: 200px;
            background: linear-gradient(to left, white, #4CAF50);
            border-radius: 20px;
        }

        .header
        {
            background-color: navy;
            opacity: 0.4;
            height: 120px;
            width:100%;
            text-align : right;
        }

        .seccionLogo
        {
            height: 450px;
            background-image: url('../resources/SeccionLogoCopia01.png');
            background-position: center;
            background-repeat: no-repeat;
            display: flex;

        }

    </style>


</head>
<body onload="initframes()">

    <div class="divHeader" id="divheader" >

        <table style="width:100%; height: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
            <tr>
                <td></td>
                <td style="font-size: 18px; "></td>
                <td style="width:95px;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16px"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"/></svg>
                    &nbsp;&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  width="16px"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                </td>
            </tr>
        </table>
    </div>
    
    <section class="seccionLogo";>
        

    </section>




</body>
</html>
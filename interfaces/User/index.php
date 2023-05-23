<?php
include "conexion.php";
$mysqli = new mysqli($host, $user, $pw, $db);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Consultar ruta</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="Estilo.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <nav class="Nav">
        <!--div class="FondoNav"><img src="img/FondoV.jpg"></div-->

        <div class="Logo">
            <i class="fas fa-bus icon"></i>
            <div class="logo_name">Smovi</div>
            <i class='fas fa-bars' id="btnM"></i>
        </div>

        <div class="BarraNavegacion">
            <button class="btn" onclick="window.location.href='#'">
                <i class="fas fa-bus"></i>
                <span>Consultar ruta</span>
            </button>
            <button class="btn" onclick="window.location.href='#paradascercanas'">
                <i class="fas fa-torii-gate"></i>
                <span>Paradas cercanas</span>
            </button>
            <button class="btn" onclick="window.location.href='#rutasalternas'">
                <i class="fas fa-route"></i>
                <span>Rutas alternativas</span>
            </button>
        </div>
        </div>
    </nav>
    <script>
        let nav = document.querySelector(".Nav");
        let closeBtn = document.querySelector("#btnM");
        if (!localStorage.getItem('openBar')) {
            console.log("no variable");
            localStorage.setItem('openBar', 0);
        } else {
            console.log("variable");
            var isOpen = localStorage.getItem('openBar');
            console.log("isOpen:"+isOpen);
            if (isOpen =="1") {
                console.log("Abrir");
                nav.classList.toggle("open");
                menuBtnChange(); //calling the function(optional)
            }
            else{
                console.log("Cerrar");
            }
        }
        closeBtn.addEventListener("click", () => {
            nav.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
            openChange(localStorage.getItem('openBar'));            
        });

        function menuBtnChange() {
            if (nav.classList.contains("open")) {
                closeBtn.classList.replace("fa-bars", "fa-arrow-left");
                console.log("open");
            } else {
                closeBtn.classList.replace("fa-arrow-left", "fa-bars");
                console.log("close");
            }
        }
        function openChange(isOpen) {
            if (isOpen == "0") {
                localStorage.setItem('openBar', 1);   
                console.log(localStorage.getItem('openBar'))         
            } else {
                localStorage.setItem('openBar', 0); 
                console.log(localStorage.getItem('openBar'))           
            }
        }
    </script>

    <section class="Section">




</body>

</html>
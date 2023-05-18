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

  <?php include "../Panel/PanelIzquierdo.php"; ?>

  <div class="Contenedor">
    <div class="Formulario">
      <div class="Titulo">
        <div class="Cont-icon">
          <i class="fas fa-bus"></i>
        </div>
        <h4 class="Name-titulo">Consultar ruta</h4>
      </div>

      <div class="Contenido">

        <form method="POST">
          <div class="BarraSelecRuta">
            <label class="lblText">Seleccione una ruta:</label>
            <select id="ID_Ruta" name="ID_Ruta" class="optText">
              <?php

              if ((isset($_POST["enviado"]))) {
                $enviado = $_POST["enviado"];
                if ($enviado == "S1") {
                  $sql1 = "SELECT * from ruta";
                  $result1 = $mysqli->query($sql1);
                  $contador1 = 0;
                  while ($row1 = $result1->fetch_array(MYSQLI_NUM)) {
                    $id_ruta = $row1[0];
                    $nombre_empresa = $row1[1];
                    $numruta = $row1[4];
                    $contador1++;
                    if ($id_ruta == $_POST["ID_Ruta"]) {
              ?>
                      <option value=<?php echo $id_ruta; ?> selected><?php echo $nombre_empresa, " ", $numruta; ?></option>
                    <?php
                    } else {
                    ?>
                      <option value=<?php echo $id_ruta; ?>><?php echo $nombre_empresa, " ", $numruta; ?></option>
                  <?php
                    }
                  }
                }
              } else {
                $sql1 = "SELECT * from ruta";
                $result1 = $mysqli->query($sql1);
                $contador1 = 0;
                while ($row1 = $result1->fetch_array(MYSQLI_NUM)) {
                  $id_ruta = $row1[0];
                  $nombre_empresa = $row1[1];
                  $numruta = $row1[4];
                  $contador1++;
                  ?>
                  <option value=<?php echo $id_ruta; ?>><?php echo $nombre_empresa, " ", $numruta; ?></option>
              <?php
                }
              }
              ?>

            </select>

            <input type="hidden" name="enviado" value="S1">
            <input type="submit" class="btn_form" value="Buscar">
          </div>

        </form>

        <?php if ((isset($_POST["enviado"]))) {
          $enviado = $_POST["enviado"];
          if ($enviado == "S1") {
            $id_ruta = $_POST["ID_Ruta"];
            $sql1 = "SELECT * from ruta where id='$id_ruta'";
            $result1 = $mysqli->query($sql1);
            $contador1 = 0;
            while ($row1 = $result1->fetch_array(MYSQLI_NUM)) {
              $empresa = $row1[1];
              $tarifa = $row1[2];
              $horario = $row1[3];
              $numruta = $row1[4];
              $coordenadas = $row1[5];
              $coordenadas = explode(',', $coordenadas);
              $contador1++;
            }
            if ($contador1 > 0) {
        ?>
              <table class="Tabla">
                <thead>
                  <tr>
                    <td style="text-align: center; font-size: 1.9rem;">Infomación de ruta: <?php echo $empresa, " ", $numruta; ?></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div id="caja">


                      </div>
                    </td>
                    <td>
                      <div id="CuadroTarifa_Horario">
                        <table class="Tabla_inforuta">
                          <thead>
                            <tr>
                              <td style="text-align: center;">Tarifa</td>
                              <td>Horario</td>
                            </tr>
                          </thead>
                          <tbody>
                            <td style="text-align: center;"><?php echo "$ $tarifa"; ?></td>
                            <td><?php echo $horario; ?></td>
                          </tbody>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            <?php
            } else { ?>
              <div class="subtitulo_No_Datos">
                <label>Error</label>
              </div>
        <?php
            }
          }
        }
        ?>


      </div>

    </div>
  </div>
  </section>

  <script>
    document.getElementById('caja').innerHTML = "<div id='map' style='width: 100%; height: 100%;'></div>";
    var mymap = L.map('map').setView([2.441852, -76.606293], 14.5);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(mymap);
    var data = <?php echo JSON_Encode($coordenadas); ?>;
    var latlngs = new Array();
    var k = 0;
    for (var i = 0; i < data.length; i = i + 2) {
      var coord = [];
      coord[0] = Number(data[i]);
      coord[1] = Number(data[i + 1]);
      latlngs[k] = coord;
      k = k + 1;      

    }    
    var polygon = L.polygon(latlngs, {
      fillOpacity: 0,
      color: 'blue'
    }).addTo(mymap);
  </script>  
</body>

</html>
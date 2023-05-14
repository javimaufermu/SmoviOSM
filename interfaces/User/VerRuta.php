<?php
include "conexion.php";                                                 
$mysqli = new mysqli($host, $user, $pw, $db);
?>
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Ver ruta</title> 
    <meta charset="UTF-8">       
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="Estilo.css" rel="stylesheet" type="text/css"/> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <?php include "../Panel/Panelizquierdo.php";?> 

      <div class="Contenedor">        
         <div class="Formulario">
            <div class="Titulo">
              <div class="Cont-icon">
                <i class="fas fa-bus"></i>
              </div>
              <h4 class="Name-titulo">Ver ruta</h4>
            </div>

            <div class="Contenido">
            <?php
            if ((isset($_POST["enviado"])))
              {
              $enviado = $_POST["enviado"];
              
              if ($enviado == "S1")
                {
                $id_ruta = $_POST["ID_Ruta"];
                $sql1 = "SELECT * from ruta where id='$id_ruta'";
                $result1 = $mysqli->query($sql1);
                $contador1 = 0;
                while($row1 = $result1->fetch_array(MYSQLI_NUM))
                {
                  $empresa = $row1[1];
                  $tarifa = $row1[2];
                  $horario = $row1[3];
                  $numruta = $row1[4];  
                  $coordenadas = $row1[5];
                  $coordenadas = explode(',',$coordenadas);
                  $contador1++;
                }
                if($contador1>0){    
            ?>         
          <table class="Tabla">
            <thead>
              <tr>
                <td style="text-align: center; font-size: 1.9rem;">Infomación de ruta: <?php echo $empresa," ",$numruta; ?></td>                                              
              </tr>
            </thead>
            <tbody>
            <tr>
              <td>
            <div id="mimapa">              
              <iframe src="../OpenStreetMap/MapaVerRuta.php?id_ruta=<?php echo $id_ruta;?>" width="100%" height="570" style="border:0;"></iframe>
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
                            <td style="text-align: center;"><?php echo "$ $tarifa";?></td>
                            <td><?php echo $horario;?></td>
                          </tbody>
            </div>
                </td>
                </tr>
                </tbody>
                </table>                      
            <?php
            }
            else{?>
                <div class="subtitulo_No_Datos">
                  <label>Error</label>           		   		
                </div>
            <?php           		
            }
            }
            }
            ?>          
            <div class="BarraInferior">             
                <input type="button" class="btn_cancelar" align="right" value="Volver" onClick="location.href='InterfazConsultarRuta.php'">
            </div>
      
        </div> 
      </div>
      </div>          
    </section>
    <script type="text/javascript" src="Eventos.js"></script>
  </body>  
</html>


<?php
include "conexion.php"; 
$mysqli = new mysqli($host, $user, $pw, $db);
?>
<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>Consultar ruta</title> 
    <meta charset="UTF-8">   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="Estilo.css" rel="stylesheet" type="text/css"/> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">   
  </head> 
  <body>
    
    <?php include "../Panel/PanelIzquierdo.php";?>

      <div class="Contenedor">
        <div class="Formulario">
          <div class="Titulo">
            <div class="Cont-icon">
              <i class="fas fa-bus"></i>
            </div>
            <h4 class="Name-titulo">Consultar ruta</h4>
          </div>

          <div class="Contenido">

          <form action="VerRuta.php" method="POST">
              <label style="font-size:1.9rem;">Seleccione una ruta:</label>
              <select name="ID_Ruta" style="font-size:1.9rem;">
              <?php
              $sql1 = "SELECT * from ruta";
              $result1 = $mysqli->query($sql1);
              $contador1 = 0;
              while($row1 = $result1->fetch_array(MYSQLI_NUM))
              {                        
                  $id_ruta = $row1[0];
                  $nombre_empresa = $row1[1];
                  $numruta = $row1[4];
                  $contador1++;
              ?>
              <option value=<?php echo $id_ruta;?>><?php echo $nombre_empresa," ",$numruta;?></option>                                                                           
              <?php
              }
              ?>
                                        
              </select>   
              <div class="BarraBotonMod">                  
              <input type="hidden" name="enviado" value="S1">  
              <input type="submit" class="btn_form" value="Buscar">
              </div>
                            
              </form>
            
           
          </div>          
        </div>
      </div>
    </section>


    <script type="text/javascript" src="Eventos.js"></script>
  </body>  
</html>




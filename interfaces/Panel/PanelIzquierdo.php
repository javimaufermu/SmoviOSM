<?php 
    echo "
    <nav class=\" Nav \" >
      <div class=\"FondoNav\"><img src=\"img/FondoV.jpg\"></div> 

      <div class=\"Logo\">
        <p>Smovi</p>
      </div>

      <div class=\"BarraNavegacion\">
          <button class=\"btn\" onclick=\"window.location.href='/SmoviRepo/interfaces/User/InterfazConsultarRuta.php'\">
            <i class=\"fas fa-bus\"></i>
            <span>Consultar ruta</span>
          </button>
          <button class=\"btn\" onclick=\"window.location.href='/SmoviRepo/interfaces/User/ParadaCercana.php'\">
            <i class=\"fas fa-torii-gate\"></i>
            <span>Paradas cercanas</span>
          </button>
          <button class=\"btn\" onclick=\"window.location.href='/SmoviRepo/interfaces/User/RutaAlterna.php'\">
            <i class=\"fas fa-route\"></i>
            <span>Rutas alternativas</span>
          </button>         
      </div> 
      </div> 
    </nav>

    <section class=\"Section\">
      
      
      
    ";
?>
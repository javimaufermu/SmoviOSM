<?php 
    echo "
    <nav class=\" Nav \" >
      <div class=\"FondoNav\"><img src=\"img/FondoV.jpg\"></div> 

      <div class=\"Logo\">
        <p>Smovi</p>
      </div>

      <div class=\"BarraNavegacion\">
          <button class=\"btn\" onclick=\"window.location.href='/Smovi/interfaces_preliminares_nueva/InterfacesAdmin/InterfazAgregarRuta/InterfazAgregarRuta.php'\">
            <i class=\"fas fa-plus-circle\"></i>
            <span>Agregar ruta</span>
          </button>
          <button class=\"btn\" onclick=\"window.location.href='/Smovi/interfaces_preliminares_nueva/InterfacesAdmin/InterfazModificarRuta/InterfazSelRuta.php'\">
            <i class=\"fas fa-cogs\"></i>
            <span>Modificar ruta</span>
          </button>
          <button class=\"btn\" onclick=\"window.location.href='/Smovi/interfaces_preliminares_nueva/InterfacesAdmin/InterfazVerInfoRuta/InterfazSelInfoRuta.php'\">
            <i class=\"fas fa-search\"></i>
            <span>Información de rutas</span>
          </button>         
      </div> 
      </div> 
    </nav>

    <section class=\"Section\">
      <div class=\"Header\" align=\"right\" >
        <h2>Administrador</h2>
        <a> ";        
        echo " </a>        
        <i class=\"fas fa-power-off\" title=\"Cerrar Sesión\" onclick=\"window.location.href='/Smovi/interfaces_preliminares_nueva/InterfacesAdmin/Autenticacion/cerrar_sesion.php'\"></i>
      </div>
      
      
    ";
      
  
?>
<?php 
    echo "
    <nav class=\" Nav \" >
      <!--div class=\"FondoNav\"><img src=\"img/FondoV.jpg\"></div--> 

      <div class=\"Logo\">
      <i class=\"fas fa-bus icon\"></i>        
        <div class=\"logo_name\">Smovi</div>
        <i class='fas fa-bars' id=\"btnM\"></i>
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
    <script>
  let nav = document.querySelector(\".Nav\");
  let closeBtn = document.querySelector(\"#btnM\");  

  closeBtn.addEventListener(\"click\", ()=>{
    nav.classList.toggle(\"open\");
    menuBtnChange();//calling the function(optional)
  });
    
  function menuBtnChange() {
   if(nav.classList.contains(\"open\")){
     closeBtn.classList.replace(\"fa-bars\", \"fa-arrow-left\");
     console.log(\"open\");
   }else {
     closeBtn.classList.replace(\"fa-arrow-left\",\"fa-bars\");
     console.log(\"close\");
   }
  }
  </script>

    <section class=\"Section\">
      
      
      
    ";
?>
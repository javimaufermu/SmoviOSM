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

  if (!localStorage.getItem('openBar')) {
    console.log(\"no variable\");
    localStorage.setItem('openBar', 0);
} else {
    console.log(\"variable\");
    var isOpen = localStorage.getItem('openBar');
    console.log(\"isOpen:\"+isOpen);
    if (isOpen ==\"1\") {        
        nav.classList.toggle(\"open\");
        menuBtnChange();
    }    
}

  closeBtn.addEventListener(\"click\", ()=>{
    nav.classList.toggle(\"open\");
    menuBtnChange();
    openChange(localStorage.getItem('openBar'));   
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
  function openChange(isOpen) {
    if (isOpen == \"0\") {
        localStorage.setItem('openBar', 1);   
        console.log(localStorage.getItem('openBar'))         
    } else {
        localStorage.setItem('openBar', 0); 
        console.log(localStorage.getItem('openBar'))           
    }
}
  </script>

    <section class=\"Section\">
      
      
      
    ";
?>
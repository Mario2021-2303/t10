<?php
require("lib/plantilla.php");
require("lib/main.php");
plantilla::aplicar();


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $con1 = $_POST["con1"] ?? '';
  $con2 = $_POST["con2"] ?? '';
  $con3 = $_POST["con3"] ?? '';
  $con4 = $_POST["con4"] ?? '';
  $con5 = $_POST["con5"] ?? '';
  $con6 = $_POST["con6"] ?? '';
  $con7 = $_POST["con7"] ?? '';
  $con8 = $_POST["con8"] ?? '';
  $con9 = $_POST["con9"] ?? '';
  $con10 = $_POST["con10"] ?? '';
  $con11 = $_POST["con11"] ?? '';
  $con12 = $_POST["con12"] ?? '';
  

  

  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

 
  if ($stmt = $mysqli->prepare("INSERT INTO colo (con1, con2, con3, con4, con5, con6, con7, con8, con9, con10, con11, con12) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {

    $stmt->bind_param("ssssssssssss", $con1, $con2, $con3, $con4, $con5, $con6, $con7, $con8, $con9, $con10, $con11, $con12);

 

    $stmt->close(); 
} else {
    echo "Error: " . $mysqli->error;
}


}





?>





            <div class="container">

            <div class="align-center center-text mb-4">
               <h1>¡Juego del Colorín!</h1>
            </div>

     


    <div class="row">
      <div class="col-md-4">
       <form action='' method='POST'>
        <div class="form-group">
          <input type="text" class="form-control" id="con1" name="con1" placeholder="Ingrese texto" >
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con2" placeholder="Ingrese texto">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con3" placeholder="Ingrese texto">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con4" placeholder="Ingrese texto">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <input type="text" class="form-control" id="con5" placeholder="Ingrese texto">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con6" placeholder="Ingrese texto">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con7" placeholder="Ingrese texto">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con8" placeholder="Ingrese texto">
        </div>
      </div>

      

      <div class="col-md-4">
        <div class="form-group">
          <input type="text" class="form-control" id="con9" placeholder="Ingrese texto">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con10" placeholder="Ingrese texto">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con11" placeholder="Ingrese texto">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="con12" placeholder="Ingrese texto">
        </div>
      
  </div>
        
      </div>
      <div class="d-flex justify-content-center align-items-center ">
     <button type="submit" class="btn btn-primary">¡Jugar!</button>
      </div>
      
 
      </script>
    </form>
    <button onclick="validar()" class="btn btn-primary ml-4">¡Color!</button>
    <div class="mt-3 text-center ">
      <span id="contadorRojo">Rojos: 0</span>
      <span id="contadorAzul">Azules: 0</span>
      <span id="contadorVerde">Verdes: 0</span>
    </div>

    

    
    </div>

    <script>
 function validar() {
  var inputs = document.querySelectorAll(".form-control");

  for (var i = 0; i < inputs.length; i++) {
    var input = inputs[i];
    var texto = input.value.toLowerCase();

    if (texto === "rojo") {
      input.style.borderColor = "red";
    } else if (texto === "verde") {
      input.style.borderColor = "green";
    } else if (texto === "azul") {
      input.style.borderColor = "blue";
    }
  }
}



function validarInputs() {
  var inputs = document.querySelectorAll(".form-control");

var contadorRojo = 0;
var contadorAzul = 0;
var contadorVerde = 0;

  for (var i = 0; i < inputs.length; i++) {
    var input = inputs[i];
    var texto = input.value.toLowerCase();

    if (texto === "rojo") {
      contadorRojo++;
    } else if (texto === "azul") {
      contadorAzul++;
    } else if (texto === "verde") {
      contadorVerde++;
    }
  }

  actualizarContadores();
}

function actualizarContadores() {
  document.getElementById("contadorRojo").textContent = "Rojos: " + contadorRojo;
  document.getElementById("contadorAzul").textContent = "Azules: " + contadorAzul;
  document.getElementById("contadorVerde").textContent = "Verdes: " + contadorVerde;
}



</script>
  </div> 

  


  

<?php
//dades de connexió
$servidor = "localhost";
  $usuari = "pruebapractica";
  $contrasenya = "pruebapractica";
  $basededades = "pruebapractica";
  $taula = "items_compra";


//connexió a la base de dades
$conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

//comprovem connexió
if ($conn->connect_error) {
  return "DATABASE ERROR: ".$conn->connect_error;
  die();
}

if(!empty($_POST["item"])) { //si s’han enviat dades pel post
  $item = $_POST["item"];
  $sql = "SELECT * FROM $taula WHERE item='$item'"; //construïm consulta

  //llancem la consulta
  $result = $conn->query($sql);

  if ($result->num_rows == 0) { //si no hi ha resultats, el nom d’usuari està disponible
    echo "disponible";
  }else{ //si no, es que ja està utilitzat.
    echo "no disponible";
  }
}

//close connection
$conn->close();
?>

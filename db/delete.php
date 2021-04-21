<?php
//dades de connexió

$servidor = "localhost";
  $usuari = "pruebapractica";
  $contrasenya = "pruebapractica";
  $basededades = "pruebapractica";
  $taula = "items_compra";

$id = $GET["id"];
$sql = "DELETE FROM $taula WHERE id = '$id'";
  


//fem la connexió
$conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

// comprovem la connexió
if ($conn->connect_error) { //si falla
echo "Fallada en la connexió: ".$conn->connect_error;
die();
// }else{ //tot ok
//   echo "ok<br>";
}


//fem la consulta per a poder eliminar la pelicula
if ($conn ->query($sql) === TRUE){ // es a dir si hi ha conexio a la db seguim endevant.
  echo "OK! Eliminat.";
  echo 	"<a href='../index.php' class='nav-item'>Volver al inicio</a>";
}else {
  echo "Error: ".$sql."<br>".$conn->error; 
}

$conn->close();
?>
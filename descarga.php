<?php

//dades de connexió
function downloadtable(){
  $servidor = "localhost";
  $usuari = "pruebapractica";
  $contrasenya = "pruebapractica";
  $basededades = "pruebapractica";
  $taula = "items_compra";
  
$tauladescarga = "";  
//consulta
  $sql = "SELECT * FROM `$taula` ORDER BY `id` ASC";

//fem la connexió
  $conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

// comprovem la connexió
  if ($conn->connect_error) { //si falla
  echo "Fallada en la connexió: ".$conn->connect_error;
  die();
// }else{ //tot ok
//   echo "ok<br>";
}

  $resultat = $conn->query($sql); //executem la consulta
  
  if ($resultat->num_rows > 0) { //comprovem que el resultat no és 0

  while($fila = $resultat->fetch_assoc()) { //imprimim les files
    
      $tauladescarga = $tauladescarga." ".$fila['id']." ".$fila['item']." ".$fila['stock']." \n";
    }
    

  $filename = date("d-m-Y-h-i-s");
  // marcamos la ruta en la que se generara este archivo
  $arxiu = "files/".$filename.".txt";
  // situamos el puntero, abriendo el archivo y en modo escritura.
  $fp = fopen($arxiu, "w");
  //Escribimos el contenido de printlorem
  fwrite($fp, $tauladescarga);
  //cerramos el archivo.
  fclose($fp);  
 
  $fixer = " <p><br><a href='$arxiu'> Dale clic derecho y descarga.</a></p>";


} else {
  echo "Sense resultats..."; //la taula no te registres
}

$conn->close(); //tanquem la connexió amb la base de dades

return $fixer;
}
?>
  

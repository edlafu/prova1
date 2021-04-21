<?php

//dades de connexió
function printtable(){
  $servidor = "localhost";
  $usuari = "pruebapractica";
  $contrasenya = "pruebapractica";
  $basededades = "pruebapractica";
  $taula = "items_compra";
  
   $taulaimpresa = "<table border='1px'><tr><th>id</th><th>item</th><th>stock</th><th>eliminar</th></tr>";
  
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
    
      $taulaimpresa = $taulaimpresa."<tr>
      <td>".$fila['id']."</td>
      <td>".$fila['item']."</td>
      <td>".$fila['stock']."</td>
      <td><a href=db/delete.php?id=$fila[id]>Eliminar item</a>";
    }
    
  $taulaimpresa = $taulaimpresa."</table>";


} else {
  echo "Sense resultats..."; //la taula no te registres
}

$conn->close(); //tanquem la connexió amb la base de dades

return $taulaimpresa;
}
?>
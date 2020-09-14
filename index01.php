<?php

// seleziona tutto dalla tabella pagamenti e stampa il risultato in una lista ordinata

$servername = "localhost";
$user= "root";
$password="root";
$dbname = "dbhotel";

$conn = new mysqli($servername,$user,$password,$dbname);

if ($conn && $conn ->connect_error){
  echo "Error Connection" . $conn ->connect_error;
  return;
}

$sql = "
    SELECT * FROM pagamenti;
 ";

$result = $conn-> query($sql);

if($result && $result->num_rows>0){

  echo "<ol>";

  while($row = $result->fetch_assoc()){
    echo "<li>"
    . "status: ".$row['status']
    . " -- price: ".$row['price']
    . " -- prenotazione_id: ".$row['prenotazione_id']
    . " -- pagante_id: ".$row['pagante_id']
    . " -- created_at: ".$row['created_at']
    .  "</li>";
    }
    echo "</ol>";
}
elseif($result){
  echo "0 result";
}
else{
  echo "query error";
}

$conn ->close();






 ?>

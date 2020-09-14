<?php

// seleziona dalla tabella pagamenti le colonne id, status e price di tutti i pagamenti con price superiore a 600, stampa il risultato in una lista non ordinata

$servername = "localhost";
$user= "root";
$password="root";
$dbname = "dbhotel";

$conn = new mysqli($servername,$user,$password,$dbname);

if ($conn && $conn ->connect_error) {
  echo "Error Connection" . $conn ->connect_error;
  return;
}

$sql = "
      SELECT id,status,price
      FROM pagamenti
      WHERE price > 600
 ";

$result = $conn-> query($sql);

if ($result && $result->num_rows>0){
  echo "<ul>";

  while ($row = $result->fetch_assoc()){
    echo "<li>"
    . "id: " . $row['id']
    . "---- status: " . $row['status']
    . "---- price: " . $row['price']
    . "</li>";
  }
  echo "</ul>";
}

elseif($result){
  echo "0 elements";
}

else{
  echo "Query error";
}

$conn ->close();







 ?>

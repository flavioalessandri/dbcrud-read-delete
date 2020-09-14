<?php

// elimina dalla tabella pagamenti la riga con id 8

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
    DELETE FROM pagamenti WHERE id = 8;
 ";

$result = $conn-> query($sql);


  if ($result === TRUE) {
    echo 'deleted';
    print_r($result);
  }

$conn ->close();







 ?>

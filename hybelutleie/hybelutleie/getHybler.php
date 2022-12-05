<?php

$con = mysqli_connect('localhost', 'root', '','hybelutleie');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT tittel, bilde, pris, beskrivelse, startdDato, sluttDato FROM hybel";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "Tittel: " . $row["tittel"]. " - Bilde: " . $row["bilde"]. " pris: " . $row["pris"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);
?>
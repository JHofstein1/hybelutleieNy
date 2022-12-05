<?php
$tilkobling = mysqli_connect('localhost', 'hoffski', 'modul7', 'hybelutleie');

if(!$tilkobling){
	echo 'test';
	exit();
}

$sql = 'select max(annonse_ID) from annonser';

$resultat = mysqli_query($tilkobling, $sql);


$maxId = mysqli_fetch_array($resultat)["max(annonse_ID)"];
?>

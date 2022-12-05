<?php

$tKobling = mysqli_connect('localhost', 'hoffski', 'modul7', 'hybelutleie');

//Sjekk tilkobling
if(!$tKobling) {
    echo 'Tilkoblings feil: ' . mysqli_connect_error();
}


$aOverskrift = $_POST['annonseOverskrift'];
$gAdresse = $_POST['gateadresse'];
$pNummer = $_POST['postnummer'];
$hvaLeiesUt = $_POST['hvaLeiesUt'];
$pRom = $_POST['primærrom'];
$bAreal = $_POST['bruttoareal'];
$bruksAreal = $_POST['bruksareal'];
$aSoverrom = $_POST['antallSoverrom'];
$etasje = $_POST['etasje'];
$mLeie = $_POST['månedsleie'];
$depositum = $_POST['depositum'];
$beskrivelse = $_POST['beskrivelse'];


$sql = "INSERT INTO annonser (annonseOverskrift, gateadresse, postnummer, hvaLeiesUt, primærrom, bruttoareal, bruksareal,
                              antallSoverrom, etasje, månedsleie, depositum, beskrivelse) 
VALUES ('$aOverskrift', '$gAdresse', '$pNummer', '$hvaLeiesUt', '$pRom', '$bAreal', '$bruksAreal', '$aSoverrom', '$etasje', 
                            '$mLeie', '$depositum', '$beskrivelse')";

$resultat = mysqli_query($tKobling, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lei ut</title>
</head>
<?php

if (isset($_REQUEST['nyAnnonse'])) {
    
    require_once('./db_leiut.php');
    require_once('./getMaxId.php');
    echo $maxId;
    require_once('./opplastBilde.php');
}

?>
<body>
    
   <div class="container">
    <div class="title">Lei ut leilighet</div>
    <form action="leiut.php" method="post" enctype="multipart/form-data">

            <div class="user-details">
            <div class="input-box">
                <span class="details">Annonseoverskrift</span>
                <input type="text" name="annonseOverskrift" placeholder="Annonseoverskrift" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Gateadresse</span>
                <input type="text" name="gateadresse" placeholder="Gateadresse" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Postnummer</span>
                <input type="text" name="postnummer" placeholder="Postnummer" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Hva leies ut</span>
                <input type="text" name="hvaLeiesUt" placeholder="Hva leies ut" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Primærrom</span>
                <input type="text" name="primærrom" placeholder="Primærrom" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Bruttoareal</span>
                <input type="text" name="bruttoareal" placeholder="Bruttoareal" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Bruksareal</span>
                <input type="text" name="bruksareal" placeholder="Bruksareal" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Antall soverrom</span>
                <input type="text" name="antallSoverrom" placeholder="Antall soverrom" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Etasje</span>
                <input type="text" name="etasje" placeholder="Etasje">
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Månedsleie</span>
                <input type="text" name="månedsleie" placeholder="Månedsleie" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Depositum</span>
                <input type="text" name="depositum" placeholder="Depositum" required>
            </div>
            <div class="user-details">
            <div class="input-box">
                <span class="details">Beskrivelse</span>
                <input type="text" name="beskrivelse" placeholder="Beskrivelse" required>
            </div>
            <input type="file" name="bilde">
            <input type="submit" name="nyAnnonse" value="opplast">
            </form>
   </div>

  

   <?php
    //if statement som sjekker om det er skrevet noe i fornavn feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aOverskrift = $_POST['annonseOverskrift'];
       
    }
    //if statement som sjekker om det er skrevet noe i etternavn feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gAdresse = $_POST['gateadresse'];
      
    }
    //if statement som sjekker om det er skrevet noe i email feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pNummer = $_POST['postnummer'];
        
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hvaLeiesUt = $_POST['hvaLeiesUt'];
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pRom = $_POST['primærrom'];
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bAreal = $_POST['bruttoareal'];
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bruksAreal = $_POST['bruksareal'];
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aSoverrom = $_POST['antallSoverrom'];
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $etasje = $_POST['etasje'];
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mLeie = $_POST['månedsleie'];
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $depositum = $_POST['depositum'];
        
    }
    //if statement som sjekker om det er skrevet noe i telefon nummer feltet, bruker post arrayet.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $beskrivelse = $_POST['beskrivelse'];
        
    }
    

   
      
    ?>

</body>
</html>
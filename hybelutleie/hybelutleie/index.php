<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HybelUtleie.no</title>
</head>
<body>
<?php
session_start();


if (isset($_SESSION['userName'])) {

  header("Location: indexLI.php");


} else {
  
  header("Location: login.php");
 
}

?>

    <div class="box-area"></div>
        <header>
            <div class="wrapper">
                <div class="logo">
                    <a href="#">HybelUtleie.no</a>
                </div>

                <nav>
                    <a href="index.php">Hjem</a>
                    <a href="#">Finn leilighet</a>
                    <a href="leiut.php">Lei ut</a>
                    <a href="#">Din profil</a>
                    
                    <a href="login.php">Logg inn</a>
                </nav>
            </div>
        </header>
        
        <div class="banner-area">
            <h2>Velkommen til HybelUtleie.no</h2>
        </div>

        <div class="content-area">
            <div class="wrapper">
                <h2>Logg inn for å se ledige utleie enheter</h2>
                
            </div>
        </div>

        <footer>Image by gpointstudio on Freepik</footer>

</body>
</html>
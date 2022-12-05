<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
   
    $con = mysqli_connect('localhost', 'root', '','hybelutleie');

   // henter post request informasjonen
   $firstName = $_POST['firstName'];
   $lastName = $_POST['lastName'];
   $age = $_POST['age'];
   $userName = $_POST['userName'];
   $passord = $_POST['password'];
   $pass = password_hash($passord, PASSWORD_DEFAULT);
   $phoneNumber = $_POST['phoneNumber'];
   $eMail = $_POST['eMail'];
   $adress = $_POST['adress'];
   $postalCode = $_POST['postalCode'];
   $city = $_POST['city'];
   $country = $_POST['country'];
   $gender = $_POST['gender'];

   // query for å sette inn dataen i databasen
   $sql = "INSERT INTO user (firstName, lastName, age, userName, password, phoneNumber, eMail, adress, postalCode, city, country, gender
    ) VALUES ('$firstName', '$lastName', '$age', '$userName', '$pass', '$phoneNumber', '$eMail', '$adress', '$postalCode', '$city', '$country', '$gender' )";

   // setter den inn in database
   $rs = mysqli_query($con, $sql);

   // gir bekreftelse på at den er satt inn
   if($rs)
   {

    header("Location: login.php");
   }
       
   







?>
</body>
</html>



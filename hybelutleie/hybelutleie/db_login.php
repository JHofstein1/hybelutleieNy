<?php
    

    $sname= "localhost";
  $unmae= "root";
  $password1 = "";
  $db_name = "hybelutleie";
  $con = mysqli_connect($sname, $unmae, $password1, $db_name);
  if (!$con) {

      echo "Connection failed!";
  }
        $userName = $_POST['userName'];
        $passord = $_POST['password'];

        strip_tags($passord);
        strip_tags($userName);

        $select = "SELECT ID, firstName, password FROM user WHERE userName = '$userName'";
        $result = $con->query($select);
        while($row = $result->fetch_object()){
        $hash = $row->password;
        
    }

    if(password_verify($passord, $hash)) {

    session_start();
    header("Location: indexLI.php");
    $_SESSION['row']['ID'] = $row->id;
    $_SESSION['row']['firstName'] = $row->firstName;
    $_SESSION['row']['userName'] = $username;

    } else {
        header("Location: loginfailed.php");
        //echo $hash;
        //echo $passord;
    }
?>
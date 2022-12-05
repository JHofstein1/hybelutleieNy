<?php


  include "db_leiut.php";

  //echo "<pre>";
  //print_r($_FILES['bilde']);
  //echo "</pre>";

  $bilde_navn = $_FILES['bilde']['name'];
  $bilde_strl = $_FILES['bilde']['size'];
  $tmp_navn = $_FILES['bilde']['tmp_name'];
  $error = $_FILES['bilde']['error'];

  if ($error === 0) {
    if ($bilde_strl > 125000) {
      $em = "Beklager filen din er for stor!";
      header("Location: leiut.php?error=$em");
    } else {
      $img_ex = pathinfo($bilde_navn, PATHINFO_EXTENSION);
      echo($img_ex);
      $img_ex_lc = strtolower($img_ex);

      $tillatte_exs = array("jpg", "jpeg", "png");

      if (in_array($img_ex_lc, $tillatte_exs)) {
          $nytt_bilde_navn = uniqid("IMG-", true).'.'.$img_ex_lc;
          $bilde_opplast_path = '../opplastninger/'.$nytt_bilde_navn;
          move_uploaded_file($tmp_navn, $bilde_opplast_path);
	  $maxId+=1;

          $sql = "update annonser set bilde_url = '$nytt_bilde_navn' WHERE annonse_Id = $maxId";
              mysqli_query($tKobling, $sql);


      } else {
        $em = "Du kan ikke opplaste denne typen filer!";
        header("Location: leiut.php?error=$em");
      }
    }


  } else {
      $em = "uforventet feil oppstod!";
      header("Location: leiut.php?error=$em");
  }



?>

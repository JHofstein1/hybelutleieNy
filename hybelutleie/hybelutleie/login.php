<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\loginstyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logg inn</title>
</head>
<body>
<form action="db_login.php" method="post">
  <div class="imgcontainer">
    <img src="img/logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="userName" ><b>Brukernavn</b></label><br>
    <input type="text" placeholder="Enter Username" name="userName" required>
    <br><br>
    <label for="password" ><b>Passord</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>
    <button type="submit">Logg inn</button><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
    <br>
  
  <div class="container">
    <span class="psw">Ny bruker?  <a href="register.php">Registrer deg</a></span>
  </div>
</form>
</body>
</html>
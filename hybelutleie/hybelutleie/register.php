<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="regStyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer deg</title>
</head>
<body>
    

<h1>Registrer deg</h1>
<fieldset>

<div class="container"></div>
<form name="user" method="post" action="db_register.php">
<p>
<label for="firstName">Fornavn</label>
<input type="text" name="firstName" id="firstName" required>
</p>
<p>
<label for="lastName">Etternavn</label>
<input type="text" name="lastName" id="lastName" required>
</p>
<p>
<label for="age">Age</label>
<input type="number" name="age" id="age">
</p>
<p>
<label for="userName">Brukernavn</label>
<input name="userName" id="userName" required>
</p>
<p>
<label for="password">Passord</label>
<input type="password" name="password" id="password" required>
</p>
<p>
<label for="phoneNumber">Telefonnummer</label>
<input type="number" name="phoneNumber" id="phoneNumber" required>
</p>
<p>
<label for="eMail">E-Postadresse</label>
<input type="text" name="eMail" id="eMail" required>
</p>
<p>
<label for="adress">Adresse</label>
<input type="text" name="adress" id="adress" required>
</p>
<p>
<label for="postalCode">Postkode</label>
<input type="number" name="postalCode" id="postalCode" required>
</p>
<p>
<label for="city">By</label>
<input type="text" name="city" id="city" required>
</p>
<p>
<p>
<label for="country">Land</label>
<input type="text" name="country" id="country" required>
</p>
<input type="radio" name="gender" value="male"> Mann
<input type="radio" name="gender" value="female"> Dame
</div>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>






</body>
</html>

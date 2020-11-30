<!DOCTYPE html>
 
<html>
 
<head>
    <meta charset="UTF-8">
<title>Vogelwanderung - CMS</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrap">
    <header></header>
<!-- Bildbereich -->
<div id="bildbereich"><img src="vogelbilder/rabenkraehe_1280_908_klein.jpg" alt="Rabenkraehe" name="themenpic" id="themenpic" title="Rabenkraehe"></div>
<h1>STADT_NATUR</h1>
<a href="login.php"><hr id="linie"></a>
<!-- Ausgabe-Bereich -->
<div id="ausgabe">

<form id="form1" name="form1" method="post" action="php/kontrolle.php">
  <p>
    <label for="benutername">Benutzername:</label>
    <br />
    <input type="text" name="benutername" id="benutername">
  </p>
  <p>
    <label for="pass">Passwort:</label>
    <br />
    <input type="password" name="passwort" id="passwort">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Login prüfen">
  </p>
</form>
</div>

</div>
</body>
</html>

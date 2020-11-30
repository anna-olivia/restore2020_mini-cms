<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vogelwanderung - CMS</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrap">
<header></header>
<!-- Bildbereich -->
<div id="bildbereich"><img src="../vogelbilder/rabenkraehe_1280_908_klein.jpg" alt="Rabenkraehe" name="themenpic" id="themenpic" title="Rabenkraehe"></div>
<h1>STADT_NATUR</h1>
<a href="eingabe.php"><hr id="linie"></a>
<!-- Ausgabe-Bereich -->
<div id="ausgabe">

<form id="form1" name="form1" method="post" action="schreiben.php">
  <p>
    <label for="themawahl">Thema:</label> 
    <select name="themawahl" id="themawahl">
  <option value="Aktuell">Aktuell</option>
  <option value="Informationen">Informationen</option>
  <option value="Sonstiges">Sonstiges</option>
</select>
  </p>
  <p>
    <label for="newsueberschrift">Newsüberschrift:</label>
    <input name="newsueberschrift" type="text" id="newsueberschrift" size="50">
  </p>
  <p>
    <label for="newstext">Newstext:</label>
    </p>
  <p>
    <textarea name="newstext" id="newstext" cols="60" rows="10"></textarea>
    <label for="button"></label>
    </p>
  <p>
    <input type="submit" name="button" id="button" value="News speichern">
  </p>
  <p><a href="backend.php">Zurück zur Backend - Auswahlseite</a></p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</div>
</div>
</body>
</html>

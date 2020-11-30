<?php
// Datenbankverbindung herstellen
include("config.php");

// Sammelbehälter für den Änderungsvorgang, Anweisung wird ind er Variablen $sqldaten gespeichert
$sqldaten = "UPDATE $dbtabelle SET thema='$_GET[themamod]', ueberschrift='$_GET[ueberschriftmod]',
news = '$_GET[textmod]' WHERE id='$_GET[updateID]' ";

// Änderungsanweisung ausführen und Weiterleitung auf die Auswahlseite
if($datenbank->query($sqldaten)){
	header("location:ausgabe_modifizieren.php");
}else{
// Ansonsten Fehlerausgabe, diese Seite besteht nur wenn Änderung nicht möglich
echo'
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

<div id="bildbereich"><img src="../vogelbilder/rabenkraehe_1280_908_klein.jpg" alt="Rabenkraehe" name="themenpic" id="themenpic" title="Rabenkraehe"></div>
<h1>STADT_NATUR</h1>
<a href="eingabe.php"><hr id="linie"></a>
<!-- Ausgabe-Bereich -->
<div id="ausgabe">
<p>Leider konnte der Eintrag nicht geändert werden</p>
<p><a href="javascript:history.back();">Zurück zur Eintragsseite</a></p>
</div>
</div>
</body>
</html>
';
}
$datenbank->close();
?>
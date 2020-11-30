<?php
// Für den Schreibvorgang erst die Verbindung zur Datenbank herstellen (wurde definiert in der Datei config.php)
include("config.php");

// Sammelbehälter für den Schreibvorgang, Verwaltung in der Variablen $sqldaten
$sqldaten = "INSERT INTO $dbtabelle (`id`, `thema`, `ueberschrift`, `news`) VALUES ('', '$_POST[themawahl]','$_POST[newsueberschrift]','$_POST[newstext]')";

//Wenn die Verbindung zur Datenbank steht , den Eintrag in die Datenbankfelder übertragen, ansonsten - tritt ein Fehler beim Schreiben auf, die Rückmneldungsseite kreieren*/
if($datenbank->query($sqldaten)){
	// Weiterleiten auf die Visualsierungseite
	header("location:eingabe.php");
}else{
	// Temporäre Seite erzeugen, wenn beim Schreiben ein Fehler auftritt. Diese Seitenstruktur besteht nur bei Fehlerausgabe.
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
<!-- Bildbereich -->
<div id="bildbereich"><img src="../vogelbilder/rabenkraehe_1280_908_klein.jpg" alt="Rabenkraehe" name="themenpic" id="themenpic" title="Rabenkraehe"></div>
<h1>STADT_NATUR</h1>
<a href="eingabe.php"><hr id="linie"></a>
<!-- Ausgabe-Bereich -->
<div id="ausgabe">
<h1>Neuer Eintrag - Fehler:</h1>
<p>Leider konnte kein Eintrag in die Datenbank erfolgen. Versuchen Sie es erneut!</p>
<p><a href="javascript:history.back();">Zurück zur Eintragsseite</a></p>
</div>
</div>
</body>
</html>
';
}
// Verbindung zur Datenbak nach dem Schreiben wieder trennen
$datenbank->close();
?>
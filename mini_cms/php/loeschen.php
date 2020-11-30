<?php

// Löschen des Datensatzes und zur Visualisierungseite(index.php) wechseln oder Fehlermeldung

// Serververbindung herstellen
include("config.php");

// SQL-Anweisung, Verwaltung in der Variablen $sqlanweisung
$sqlanweisung = "DELETE FROM $dbtabelle WHERE id=$_GET[loeschenID];";

// Wenn Verbindung zur Datenbank hergestellt werden konnte, den Eintrag löschen
if($datenbank->query($sqlanweisung)){
	// Weiterleitung zur Seite Ausgabe modifizieren
	header("location:ausgabe_modifizieren.php");
}else{
// ansonsten Fehlermeldungsseite erzeugen, diese besteht nur bei Fehlerausgabe
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
<div id="bildbereich"><img src="../vogelbilder/rabenkraehe_1280_908_klein.jpg.gif" alt="Rabenkraehe" name="themenpic" id="themenpic" title="Rabenkraehe"></div>
<h1>STADT_NATUR</h1>
<a href="eingabe.php"><hr id="linie"></a>
<!-- Ausgabe-Bereich -->
<div id="ausgabe">
<h1>Einträge - Löschen Fehlermeldung:</h1>
<p>Der ausgewählte Eintrag konnte leider aus der Datenbanktabelle nicht gelöscht werden.</p>
<p><a href="ausgabe_modifizieren.php">Zurück zur Lösch-Auswahl</a></p>

</div>

</div>
</body>
</html>';
}
// Serververbindung beenden
$datenbank->close();
?>
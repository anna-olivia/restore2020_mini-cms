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

<?php
// Datenbankverbindung herstellen
include("config.php");

// Suchformular definieren
$suchformular = "
<p>Suche:</p> 
<form method='POST' action='suche.php'>
	<input type='text' name='suchwort'>
	<input type='submit' name='SUBMIT' value='Suche starten'>
</form>
";

// Wenn der Submit-Button gedrückt wurde
$suchwort = $_POST['suchwort'];

// Suchwortanfrage an die Datenbank
// % leitet eine Suchdefinition bezüglich eines Suchwortes ein und beendet diese auch wieder
$sqlanweisung = "SELECT * FROM $dbtabelle WHERE ueberschrift LIKE '%".$suchwort."%' ORDER by id";


// ALLES zum Suchwort gefundene ausgeben und zwar aufgeteilt in die jeweiligen Datensätze
if($dbdaten = $datenbank->query($sqlanweisung)){
	// Solange zutreffende Datensätze gefunden werden diese ausgeben
	while($datensatz = $dbdaten->fetch_object()){
		echo"
		<strong>$datensatz->ueberschrift</strong>
		<p>$datensatz->news</p>
		";
	} 
	// Ausgabe beenden
	$dbdaten->close();
}else{
	// Ausgabe, wenn keine zutreffenden Einträge vorhanden
	echo "Keine Einträge vorhanden";
}

// Datenbankverbindung beenden
$datenbank->close();

// Suchformular anzeigen
echo $suchformular;

?>
<p><a href="backend.php">Zurück zur Backend - Auswahlseite</a></p>
</div>
</div>
</body>
</html>

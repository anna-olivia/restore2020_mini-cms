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
<h1>Eintrag ändern</h1>
<?php
// Datenbankverbindung herstellen
include("config.php");

// Optionen pro Eintrag: Ändern
$sqlanweisung = "SELECT * FROM $dbtabelle WHERE id='$_GET[updateID]';";

// Ausgabe oder Fehlermeldung
if($allesImDatensatz = $datenbank->query($sqlanweisung)){
	
	// Solange wie es Einträge gibt, diese ausgeben
	while($einzelnerDatensatzwert = $allesImDatensatz->fetch_object()){
	echo"
	<form action='aendern.php' methode='get'>
	<p><strong style='color:#F00;'>Thema:</strong>
	<input type='text'  name='themamod' value='$einzelnerDatensatzwert->thema'>
	</p>
	<p><strong style='color:#F00;'>Überschrift:</strong>
	<input type='text' name='ueberschriftmod' value='$einzelnerDatensatzwert->ueberschrift'>
	</p>
	<p><strong style='color:#F00;'>Nachrichtentext:</strong><br/>
	<textarea cols='30' rows='20' name='textmod' >$einzelnerDatensatzwert->news</textarea>
	</p>
	<input type='hidden' name='updateID' value='$einzelnerDatensatzwert->id'>
	<input type='submit' value='Ändern'>
	</form>
	";
	}
	
	// Zusammenarbeit mit den Datensätzen beenden
	$allesImDatensatz->close();
}else{
	// Fehlerausgabe
	echo "Leider konnte der Eintrag nicht geändert werden.";
}

// Serververbindung verlassen
$datenbank->close();
?>
<a href="ausgabe_modifizieren.php">Auswahlseite - Ändern oder Löschen</a>
</div>
</div>
</body>
</html>

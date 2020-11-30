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

<p>
  <?php
// Datenbankverbindung herstellen
include("config.php");

// Optionen pro Eintrag: Löschen oder Ändern
$sqlanweisung = "SELECT * FROM $dbtabelle ORDER by id;";

// Ausgabe oder Fehlermeldung
if($alleDatensaetze = $datenbank->query($sqlanweisung)){
	
	// Solange es Einträge gibt, diese ausgeben
	while($einzelnerDatensatz = $alleDatensaetze->fetch_object()){
	echo"
	<form action='loeschen.php' methode='get'>
	<p><strong>Thema:</strong>$einzelnerDatensatz->thema</p>
	<p><strong>Überschrift:</strong>$einzelnerDatensatz->ueberschrift</p>
	<p><strong>Nachrichtentext:</strong>$einzelnerDatensatz->news</p>
	
	<input type='hidden' name='loeschenID' value='$einzelnerDatensatz->id'>
	
	<input type='submit' value='Löschen'/>
	</form>
	";
	
	// Auch in Wiederholung das Erstellen des Ändern-Schalters + Versandformular pro Eintrag
	
	echo"
	<form action='ausgabe_aendern.php' methode='get'>
	<input type='hidden' name='updateID' value='$einzelnerDatensatz->id'>
	<input type='submit' value='Ändern'/>
	</form>
	";
	}
	
	// Zusammenarbeit mit den Datensätzen beenden
	$alleDatensaetze->close();
}else{
	// falls kein Eintrag zur Änderung gefunden werden konnte
	echo "Leider konnten keine Einträge zum Löschen oder Ändern gefunden werden!";
}

// Serververbindung verlassen
$datenbank->close();
?>
  <a href="backend.php">Zurück zur Backend - Auswahlseite</a></p>
</div>
</body>
</html>

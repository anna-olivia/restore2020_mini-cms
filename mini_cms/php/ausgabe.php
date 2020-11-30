<?php
// Verbindung zur Datenbak herstellen
// Achtung: Die ausgabe.php wurde im Projekt in die index.php integriert. Daher gilt diese Lokation als Pfadgrundlage.
include("config.php");

// $sqldaten = "SELECT * FROM newstabelle";
// entspreicht 
// $sqldaten = "SELECT * FROM newstabelle ORDER BY id ASC";

// Anweisung wird in Variable $sqldaten verwaltet
$sqldaten = "SELECT * FROM $dbtabelle ORDER BY id DESC";

/*Solange es noch Einträge gibt, diese nacheinandern ausgeben in gewünschter Formatierung*/

// $dbdaten als Sammelbehälter für alle (*) Datensätze der Datenbank
if($dbdaten = $datenbank->query($sqldaten)){
	// fetch_object lässt die Möglichkeit zu ALLE Datensätze im EINZELNEN abzuarbeiten. Jeder wird zur Bearbeitung in eine Transportvariable $datensatz gelegt
	while($datensatz = $dbdaten->fetch_object()){
		/*Aus dem Einzeldatensatz jeweils das entsprechende Datenbankfeld aus der Datenbank in Anfrage stellen für die Ausgabe
		$datensatz->Datenfeldname aus Datenbanktabelle ausgeben*/
		echo"
		<strong>$datensatz->ueberschrift</strong>
		<p>$datensatz->news</p>
		<p><a href='php/backend.php'>Zurück zur Auswahlseite</a></p>
		";
	}
	// Verbindung zur Datenbanktabelle trennen
	$dbdaten->close();
}else{
	// Rückgabe falls keine Einträge gefunden wurden
	echo "Keine Einträge vorhanden";
}
 // Serververbindung beenden
$datenbank->close();
?>
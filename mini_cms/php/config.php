<?php

$serverbezeichnung = 'localhost';
$benutzer = 'root';
$dbpasswort = '';
$dbname = 'cms';
$dbtabelle = 'news';


// Verbindung mit Datenbank herstellen, die Verbindung wird verwaltet in der Variable datenbank
// new mysqli('Serverbezeichnung', 'Rechteebene', 'Datenbankpasswort', 'Datenbankname');
@$datenbank = new mysqli($serverbezeichnung, $benutzer, $dbpasswort , $dbname);

if(mysqli_connect_errno()){
	// Eigene Fehlermeldung, wenn keine Verbindung hergestellt werden konnte
	echo "Leider keine Verbindung zur Datenbank! Versuchen Sie es später nochmal";	
	// Verbindung beenden
	exit();
}
?>
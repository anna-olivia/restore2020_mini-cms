<?php
/* Wunschbenutzername und Wunschpasswort festlegen*/
$wunschbn = "anna";
$wunschpw = "12345";

//Loginkontrolle starten: Vergleich mit der Eingabe der Formularfelder benutzername und passwort
if($wunschbn == $_POST["benutername"] && $wunschpw == $_POST["passwort"]){
	// Weiterleitung zum Backend/Redaktion
	header("location:backend.php");
}else{
	// Weiterleitung zur Login-Seite, um die Eingabe zu wiederholen
	header("location:../login.php");
}
?>
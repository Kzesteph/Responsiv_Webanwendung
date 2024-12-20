<?php
DEFINE ('DB_USER','student01');
DEFINE ('DB_PASSWORD', 'dbs');
DEFINE ('DB_HOST', 'localhost');
//DEFINE ('DB_NAME2','university2');
DEFINE ('DB_NAME1','freiberufler');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME1);
//$dbc1 = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME2);
if (!$dbc){	
    error_log('Datenbank-Fehler: '.mysqli_connect_error());
	exit('Keine Verbindung zur Datenbank möglich');	
}
else
	error_log("Verbindung mit Datenbank erfolgreich hergestellt!");


if (!$dbc){	
	error_log('Datenbank-Fehler: '.mysqli_connect_error());
	exit('Keine Verbindung zur Datenbank möglich');	
}
else
	error_log("Verbindung mit Datenbank erfolgreich hergestellt!");

?>


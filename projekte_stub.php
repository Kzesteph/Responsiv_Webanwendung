<!DOCTYPE html>
<html>
<head>
<title>Projektwebseite Max Mustermann</title>
<meta charset="utf-8">
<meta name="author" content="EMK">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- jQuery & Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!-- jQuery DataTable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Benutzerdefinierte Stylesheets -->
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="table.css">
</head>
<body>
<?php include 'header.php';?>  
<script>
$(document).ready(function(){
    $('a[href^="projekte_stub.php"]').addClass('active');
});
</script>
<div class = "content">
<h1>REFERENZPROJEKTE</h1>
<div class="sidebar">
&nbsp;
</div>   
<div class="main">   
<?php 


  require_once('mysql_connect.php'); // Datenbankverbindung herstellen                                                                                                                                                        
  $query = 'SELECT * FROM referenzprojekte2'; // SQL-Abfrage
  $response = @mysqli_query($dbc,$query); // an die Datenbank senden
?>
             
<table id="mytab" data-role="table" data-mode="columntoggle" 
       data-column-btn-text="Spalten ..." class="ui-responsive cell-border stripe">
<thead role="rowgroup">
<?php  if($response){
	echo '
	<tr role="row"> 
	<th role="columnheader"><b>Projektname</b></th>
	<th role="columnheader"><b>Kunde</b></th>
	<th role="columnheader"><b>Laufzeit</b></th>
	<th role="columnheader"><b>Details</b></th>
	<th role="columnheader"><b>Kategorie</b></th>
	<th role="columnheader"><b>Ort</b></th>
	</tr>';	
?>
</thead><tbody role="rowgroup">
<?php 			 		
while($row = mysqli_fetch_array($response)){				
	echo '<tr role="row"><td role="cell">'.$row['projektname'].'</td>
	<td role="cell">'.$row['kunde'].'</td>
	<td role="cell">'.$row['laufzeit'].'</td>
	<td role="cell">'.utf8_encode($row['details']).'</td>	
	<td role="cell">'.$row['kategorie'].'</td>
	<td role="cell">'.$row['ort'].'</td>';
		
	echo'</tr>';
}	
?></tbody></table>
<?php
}
else{
	echo "Fehler bei der Verbindung zur Datenbank";
	echo mysqli_error($dbc);
}
mysqli_free_result($response);mysqli_close($dbc);
?>            
</div> <!-- main -->
</div>	<!-- content -->
<script> <!-- Funktionsaufruf zum Initialisieren der Tabelle -->
$(document).ready( function () {
	/* jQuery DataTable */
    $('#mytab').DataTable({

		// "bPaginate": true, // keine Paginierung
		// "bFilter": true, // keine Suche
		// "bInfo": true, // keine Anzeige der Anzahl Suchergebnisse
		
		"paging": true, 
		"searching": true,
		"info": true,


    });	   
});  
</script> 	
<?php include 'footer.php';?>       		  
</body>
</html>  
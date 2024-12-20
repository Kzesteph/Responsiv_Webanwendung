<!DOCTYPE html>
<html>
<head>
<title>Projektwebseite Max Mustermann</title>
<meta charset="utf-8">
<meta name="author" content="EMK">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- jQuery  -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>


<!-- jQuery DataTable -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


<!-- Benutzerdefinierte Stylesheets -->
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="table.css">
</head>

<body>

<?php include 'header.php';?>  
<script>
$(document).ready(function(){
    $('a[href^="impressum.php"]').addClass('active');
});
</script>
<div class = "content">
<h1>Impressum</h1>
<div class="sidebar">
&nbsp;
</div>   
<div class="main"> 
<p class= "myfont">
<b>Vorname und Nachname:</b>
<p> Max Mustermann </p></p>
<p class= "myfont">
<b>Anschrift:</b>
<p> Schoenerstrasse 11 , 67659 Kaiserslautern </p>
</p>

<p class = "myfont">

<b> Kontaktinformationen</b>
<p> Tel: 08151 - 4242 </p>
<p> E-Mail: <a href = "mailto:info@projektewebseite.de"> info@projektewebseite.de </a></p>
</p>
<p class="myfont" > Weitere Informationen finden Sie hier:  
<a rel="" href="./index.php" target="_blank"> Mein Profil</a></p>

<p class = "myfont"><b>Rechtliche Hinweise:</b>
<p>Diese Website dient der Vorstellung meiner Dienstleistungen und enthält keine persönlichen Daten ohne Ihre Zustimmung. 
Ich respektiere Datenschutzrichtlinien und bin bestrebt, die Sicherheit Ihrer Informationen zu gewährleisten.</p></p>
</div>
</div>
 
<?php include 'footer.php';?>  
		  
</body>
</html>  
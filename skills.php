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
    $('a[href^="skills.php"]').addClass('active');
});
</script>
<div class = "content">
<h1>Mein Skill</h1>
<div class="sidebar">
&nbsp;
</div>   
<div class="main"> 
<p class= "myfont">
<div class="skill">
        <h2>PHP</h2>
        <div class="progress-container">
            <div class="progress-bar" style="width: 80%;">80%</div>
        </div>
    </div>

    <div class="skill">
    <p></p> 
        <h2>JavaScript</h2>
        <div class="progress-container">
            <div class="progress-bar" style="width: 70%;">70%</div>
        </div>
    </div>

    <div class="skill">
    <p></p> 
        <h2>HTML/CSS</h2>
        <div class="progress-container">
            <div class="progress-bar" style="width: 90%;">90%</div>
        </div>
    </div>
    <div class="skill">
    <p></p> 
        <h2>Python</h2>
        <div class="progress-container">
            <div class="progress-bar" style="width: 85%;">85%</div>
        </div>
    </div>

    <div class="skill">
    <p></p> 
        <h2>SQL</h2>
        <div class="progress-container">
            <div class="progress-bar" style="width: 80%;">80%</div>
        </div>
    </div>
    </div>
    </div> 

    <!-- Füge weitere Programmierungsfähigkeiten hinzu -->

 
<?php include 'footer.php';?>  
		  
</body>
</html>  
<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:index.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SugarSense</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        @import url("theme.css");
    </style>
</head>

<body background="UTENTE.jpg">

<h2>SUGARSENSE</h2>
<h3>Ricerca Per Tipo</h3>

<div align="center">
    <form method="post" action="ricercatipo.php">
        <input type="text" class="ricerca"  name= "tipo" placeholder="Inserire il tipo">
        <input type="submit" class="pulsante_cerca" value="">
    </form>
</div>

<footer>
    <input type="button" class="logout" onclick="location.href='logout.php'" >
    <input type="button" class="home" onclick="location.href='Utente_menu.php'">
</footer>
</body>
</html>

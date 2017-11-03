<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:index.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SugarSense</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        @import url("theme.css");
    </style>
</head>

<body background="IoT.jpg">

<h2>SUGARSENSE</h2>
<h3>Amministratore</h3>

<div align="center" >
    <br><br><br><br>
    <form title="Esegui" action="scelta.php" method="post">
        <input type="submit" class="menu" name = "case" value="Aggiungi Utente" >
        <br>
        <input type="submit" class="menu" name ="case"value="Elenco Utenti">
        <br>
        <input type="submit" class="menu" name ="case" value="Ricerca Utente">
        <br>
        <input type="submit" class="menu" name ="case" value="Rimuovi Utente">
    </form>
</div>

<footer>
    <input type="button" class="logout" onclick="location.href='logout.php'" >
</footer>

</body>
</html>


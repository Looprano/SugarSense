<!doctype html>
<html>
<head>
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
        <input type="submit"  name ='ricerca' class="pulsante_cerca">
    </form>
</div>

<footer>
    <input type="button" class="logout" onclick="location.href='index.php'" >
    <input type="button" class="home" onclick="location.href='iot_menu.php'">
</footer>
</body>
</html>

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

<h3>Sensori</h3>

<div align="center" >
    <form title="Esegui" action="scelta_sensori.php" method="post">
        <input type="submit" class="menu" name='case' value="Visualizza Sensori">
        <br>
        <input type="submit" class="menu"  name='case' value="Ricerca per Tipo">
        <br>
        <input type="submit" class="menu" name='case'  value="Ricerca per ID">
</div>

<footer>
    <input type="button" class="logout">
    <input type="button" class="home">
</footer>

</body>
</html>

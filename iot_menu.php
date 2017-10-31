<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>IoT_menu</title>
    <style type="text/css">
        @import url("theme.css");
    </style>
    <link href="theme.css" rel="stylesheet" type="text/css">
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
    <input type="button" class="logout" onclick="location.href='index.php'" >
</footer>

</body>
</html>


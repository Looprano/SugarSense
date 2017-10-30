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

<body background="nature-fields-grass-flower-blur-photography.jpg">

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
    <input type="submit" name ="logout" class="logout"  value="Logout" onclick="location.href='index.php'"  >
</footer>

</body>
</html>


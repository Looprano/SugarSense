<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SugarSense</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        @import url("../theme.css");
    </style>
</head>

<body background="../images/IoT.jpg">

<h2>SUGARSENSE</h2>
<h3>Aggiungi Utente</h3>

<div align="center">
    <form method="post" action="aggiungi.php">
        <input type="text" class="registrazione"  name = 'Nome' placeholder="Nome">
        <br>
        <input type="text" class="registrazione" name = 'Cognome' placeholder="Cognome">
        <br>
        <input type="text" class="registrazione" name = 'Codice_Fiscale' placeholder="Codice_Fiscale">
        <br>
        <input type="text" class="registrazione" name = 'Username' placeholder="Username">
        <br>
        <input type="text" class="registrazione" name = 'Password' placeholder="Password">
        <br>
        <input type="submit" class="invio" value="Aggiungi">
    </form>
</div>

</body>
</html>

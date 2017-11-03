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


<body background="Errorii.jpg">

<h2>SUGARSENSE</h2>
<h3 style="text-align: center">Errore</h3>

<div>
    <?php

    switch (parametro){
        case 1:
            $error = <<<HTML
<h3>L'username è già in uso</h3>
HTML;
        case 2:
            $error = <<<HTML
<h3>L'username non esiste</h3>
HTML;
        case 3:
            $error = <<<HTML
<h3>Il database è vuoto</h3>
HTML;
        case 4:
            $error = <<<HTML
<h3>Non esistono sensori con questo tipo</h3>
HTML;
        case 5:
            $error = <<<HTML
<h3>Non esistono sensori con questo ID</h3>
HTML;
        case 6:
            $error = <<<HTML
<h3>Arco Temporale non corretto</h3>
HTML;




    }

    echo $_GET[parametro];


    ?>
</div>

    <footer>
        <input type="button" class="logout" onclick="location.href='index.php'">
        <input type="button" class="home" onclick="location.href='Utente_menu.php'">
    </footer>

</body>
</html>

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


<body background="Errorii.jpg">

<h2>SUGARSENSE</h2>
<h3 style="text-align: center">Errore</h3>

<div>
    <?php

    $error = null;
    switch ($_GET['parametro']){
        case '1':
            $error = <<<HTML
<h4 style="text-align: center">L'username è già in uso</h4>
HTML;
            break;
        case '2':
            $error = <<<HTML
<h4 style="text-align: center">L'username non esiste</h4>
HTML;
            break;
        case '3':
            $error = <<<HTML
<h4 style="text-align: center">Il database è vuoto</h4>
HTML;
            break;
        case '4':
            $error = <<<HTML
<h4 style="text-align: center">Non esistono sensori di questo tipo</h4>
HTML;
            break;
        case '5':
            $error = <<<HTML
<h4 style="text-align: center">Non esistono sensori con questo ID</h4>
HTML;
            break;
        default:
            break;
    }

    echo $error;


    ?>
</div>

    <footer>
        <input type="button" class="home" onclick="location.href='Utente_menu.php'">
    </footer>

</body>
</html>

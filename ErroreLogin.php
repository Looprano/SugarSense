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


<body background="nature-fields-grass-flower-blur-photography.jpg">

<h2>SUGARSENSE</h2>


<div align="center" class="errore">

    <h3>Username/Password non corretti</h3>

    <footer>
        <input type="button" class="logout" onclick="location.href='index.php'" >
    </footer>

</div>
</body>
</html>

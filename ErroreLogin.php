<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:index.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SugarSense</title>
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

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

<body background="UTENTE.jpg">

<h2>SUGARSENSE</h2>
<h3>Elenco Sensori</h3>

<div align="center">

    <table class="tabellabackground">

        <thead class="tabellaIntestazione">
        <tr>
            <th>ID Sensore</th>
            <th>Rilevazione</th>
            <th>Descrizione</th>
        </tr>
        </thead>


        <?php

        include 'core.php';
        $id_s = addslashes($_POST['id']);
        $user = addslashes($_SESSION['username']);

        $sql =sprintf("SELECT sensore.id_sens,valore,descrizione from(sensore INNER JOIN impianti_sensori on sensore.id_sens = impianti_sensori.id_sens and sensore.id_sens = '%s') INNER JOIN utente_impianti ON impianti_sensori.id_imp= utente_impianti.id_imp_utente and utente_impianti.username_utente = '%s'",$id_s,$user);


        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);

        if($count !== 0){
            while ($row=mysqli_fetch_array($query))
            {
                $id = htmlspecialchars($row['id_sens']);
                $valore =htmlspecialchars($row['valore']);
                $descrizione = htmlspecialchars($row['descrizione']);
                $str = <<<HTML
                <tr class=\"tabellaIntestazione\">
                <td>$id</td>
                <td>$valore</td>
                <td>$descrizione</td>
                </tr>

HTML;
                echo htmlspecialchars_decode(htmlspecialchars($str));
            }
        }else{
            $errore = 5;

            header('location:Errore.php?parametro='.$errore);

        }

        ?>


    </table>
</div>
<footer>
    <input type="button" class="logout" onclick="location.href='logout.php'" >
    <input type="button" class="home" onclick="location.href='Utente_menu.php'">
</footer>

</body>
</html>

<?php
include 'core.php';
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

    <div align="center">
        <h3>Elenco Impianti</h3>
	<table class="tabellabackground">
   <caption class="testoIntestazione">
    </caption>

    <thead class="tabellaIntestazione">
        <tr style="text-align: center">
        <th>ID impianto</th>
        <th>Indirizzo</th>

        </tr>
    </thead>

        <?php


        $user = addslashes($_SESSION['username']);
        $sql =("SELECT id_imp, indirizzo from utente_impianti INNER JOIN impianto where utente_impianti.username_utente ='$user' AND utente_impianti.id_imp_utente = impianto.id_imp");
        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query
        );

        if($count !==  0){

            while ($row=mysqli_fetch_array($query))
            {
                $id = htmlspecialchars($row['id_imp']);
                $indirizzo = htmlspecialchars($row['indirizzo']);
                $str = <<<HTML
                <tr class=\"tabellaIntestazione\">
                <td><a href=carcaSensoriImpianto.php?id=$id ?>$id</a></td>
                <td>$indirizzo</td>
                </tr>
HTML;
                echo $str;
            }
        }else{
            $errore = 3;
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


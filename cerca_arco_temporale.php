<?php
session_start();
if(!isset($_SESSION['username']))
    header('Location:index.php');
?>

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
<h3>Elenco Sensori</h3>

<div align="center">

    <table class="tabellabackground">
        <caption class="testoIntestazione">
        </caption>

        <thead class="tabellaIntestazione">
        <tr>
            <th>Rilevazione</th>

        </tr>
        </thead>


        <?php
        include 'core.php';
        $impianto = addslashes($_POST['impianto']);
        $sensore = addslashes($_POST['id_sensore']);
        $inizio = addslashes($_POST['inizio_data']);
        $fine = addslashes($_POST['fine_data']);

        $sql =("SELECT valore from (sensore inner JOIN impianti_sensori on impianti_sensori.id_imp=$impianto and impianti_sensori.id_sens='$sensore' and substring(valore,1,8) BETWEEN '$inizio' and '$fine');
");
        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
        if($count !==0 ){
            while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $valore = htmlspecialchars($row['valore']);
                $str = <<<HTML
                <tr class=\"tabellaIntestazione\">
                <td>$valore</td>
                </tr>
HTML;
                echo $str;
            }
        }else
        {
            $errore = 6;

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


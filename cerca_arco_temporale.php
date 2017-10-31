<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SugarSense</title>
    <style type="text/css">
        @import url("theme.css");
    </style>
</head>

<body background="UTENTE.jpg">

<h2>SUGARSENSE</h2>
<h3>Utente</h3>

<div align="center">

    <table class="tabellabackground">
        <caption class="testoIntestazione">
            <p>Elenco Sensori</p>
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
        $query = mysqli_query($conn,$sql) or die("errore nei parametri");
        $count = mysqli_num_rows($query);
        if($count !==0 ){
            while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $valore = $row['valore'];

                echo "<tr class=\"tabellaIntestazione\">";
                echo "<td>".$valore."</td>";
                echo "</tr>";
            }
        }else
        {
            echo 'Nessuna rilevazione presente';
        }
        ?>


    </table>
</div>
<footer>
    <input type="button" class="logout">
    <input type="button" class="home">
</footer>

</body>
</html>


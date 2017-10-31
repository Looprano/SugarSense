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
            <th>ID Sensore</th>
            <th>Rilevazione</th>
            <th>Descrizione</th>
        </tr>
        </thead>


        <?php
        include 'core.php';
        $idImpianto=  $_GET['id'];
        echo $idImpianto;

        $sql =("SELECT sensore.id_sens,valore,descrizione FROM (sensore inner join impianti_sensori on impianti_sensori.id_imp = $idImpianto and impianti_sensori.id_sens = sensore.id_sens)");

        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);

        if($count !== 0){
            while ($row=mysqli_fetch_array($query))
            {
                $id = $row['id_sens'];
                $valore = $row['valore'];
                $descrizione = $row['descrizione'];
                echo "<tr class=\"tabellaIntestazione\">";
                echo "<td>".$id."</td>";
                echo "<td>".$valore."</td>";
                echo "<td>".$descrizione."</td>";
                echo "</tr>";
            }
        }else{
            echo 'impianto non valido';
        }

        ?>

    </table>
</div>
<footer>
    <input type="button" class="logout" onclick="location.href='index.php'" >
    <input type="button" class="home" onclick="location.href='Utente_menu.php'">
</footer>

</body>
</html>


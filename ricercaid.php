

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
        $id_s = addslashes($_POST['id']);
        $user = $_SESSION['username'];
        $sql =("SELECT sensore.id_sens,valore,descrizione from(sensore INNER JOIN impianti_sensori on sensore.id_sens = impianti_sensori.id_sens and sensore.id_sens = '$id_s') INNER JOIN utente_impianti ON impianti_sensori.id_imp= utente_impianti.id_imp_utente and utente_impianti.username_utente = '$user'");

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
            echo 'nessun sensore presente';
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

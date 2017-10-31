<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>IoT_elencoUtenti</title>
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
        <p>Elenco Impianti</p>
    </caption>

    <thead class="tabellaIntestazione">
        <tr>
        <th>ID impianto</th>
        <th>Indirizzo</th>

        </tr>
    </thead>

        <?php
        include 'core.php';

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
                echo "<tr class=\"tabellaIntestazione\">";
                echo "<td>"."<a href=carcaSensoriImpianto.php?id=$id ?>$id.</a>"."</td>";
                echo "<td>".$indirizzo."</td>";
                echo "</tr>";
            }
        }else
            echo 'nessun impianto presente';

        ?>

</table>

</div>

<footer>
    <input type="button" class="logout" onclick="location.href='index.php'" >
    <input type="button" class="home" onclick="location.href='Utente_menu.php'">
</footer>

</body>
</html>


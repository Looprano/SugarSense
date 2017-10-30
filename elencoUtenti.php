
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>IoT_elencoUtenti</title>
<style type="text/css">
    @import url("theme.css");
</style>
</head>

<body background="IoT.jpg">

	<h2>SUGARSENSE</h2>
  	<h3>Amministratore</h3>

    <div align="center">

	<table class="tabellabackground">
   <caption class="testoIntestazione">
        <p>Elenco Utenti</p>
    </caption>

    <thead class="tabellaIntestazione">
        <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Codice Fiscale</th>
        <th>Username</th>
        </tr>
    </thead>

        <?php
        include 'core.php';
        $sql =('SELECT nome,cognome,codicefisc,username,type FROM login');
        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);

        if($count !== 0){
            while ($row=mysqli_fetch_array($query))
            {
                $nome = $row['nome'];
                $cognome = $row['cognome'];
                $codicefiscale = $row['codicefisc'];
                $username = $row['username'];

                echo "<tr class=\"tabellaIntestazione\">";
                echo "<td>".$nome."</td>";
                echo "<td>".$cognome."</td>";
                echo "<td>".$codicefiscale."</td>";
                echo "<td>".$username."</td>";
                echo "</tr>";

                //printf('%s %s %s %s %s', nome, cognome, codicefiscale, username);
            }
        }else{
            echo 'nessun utente presente';
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


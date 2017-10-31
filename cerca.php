
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
  	<h3>Elenco Utenti</h3>

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
        $username = addslashes($_POST['Username']);
        $sql =("SELECT nome,cognome,codicefisc,username,type FROM login WHERE username ='$username'");
        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
        if($count === 1){
            while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $nome = htmlspecialchars($row['nome']);
                $cognome = htmlspecialchars($row['cognome']);
                $codicefiscale = htmlspecialchars($row['codicefisc']);
                $username =htmlspecialchars( $row['username']);
                $str = <<<HTML
                <tr class=\"tabellaIntestazione\">
                <td>$nome</td>
                <td>$cognome</td>
                <td>$codicefiscale</td>
                <td>$username</td>
                </tr>
HTML;
                echo htmlspecialchars($str);
            }
        }else
        {
            echo 'Username non presente';
        }
        ?>

	</table>

	</div>

    <footer>
        <input type="button" class="logout" onclick="location.href='index.php'" >
        <input type="button" class="home" onclick="location.href='iot_menu.php'">
    </footer>


</body>
</html>

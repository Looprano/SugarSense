
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
        $username = addslashes($_POST['Username']);
        $sql =("SELECT nome,cognome,codicefisc,username,type FROM login WHERE username ='$username'");
        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
        if($count === 1){
            while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
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


               // printf ( "%s %s %s %s %s\n",$row['nome'],$row['cognome'],$row['codicefisc'],$row['username'],$row['type']);
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

<?php
include 'core.php';
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

<body background="IoT.jpg">

	<h2>SUGARSENSE</h2>
  	<h3>Elenco Utenti</h3>

    <div align="center">

	<table class="tabellabackground">
   <caption class="testoIntestazione">
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
        $sql =('SELECT nome,cognome,codicefisc,username,type FROM login');
        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);

        if($count !== 0){
            while ($row=mysqli_fetch_array($query))
            {
                $nome = htmlspecialchars($row['nome']);
                $cognome = htmlspecialchars($row['cognome']);
                $codicefiscale = htmlspecialchars($row['codicefisc']);
                $username = htmlspecialchars($row['username']);
                $str = <<<HTML
                <tr class=\"tabellaIntestazione\">
                <td>$nome</td>
                <td>$cognome</td>
                <td>$codicefiscale</td>
                <td>$username</td>
                </tr>
HTML;
                echo $str;
            }
        }else {
            $errore = 3;

            header('location:Errore.php?parametro='.$errore);
        }
        ?>

	</table>

	</div>

    <footer>
        <input type="button" class="logout" onclick="location.href='logout.php'" >
        <input type="button" class="home" onclick="location.href='iot_menu.php'">
    </footer>

</body>
</html>



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SugarSense</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style type="text/css">
    @import url("theme.css");
</style>
</head>


<body background="UTENTE.jpg">

<h2>SUGARSENSE</h2>
<h3>Storico</h3>
<div align="center">
    <form method="post" action="cerca_arco_temporale.php">
        <input type="text" class="ricerca" name ="impianto" placeholder="Inserire Impianto">
        <br>
        <input type="text" class="ricerca" name = "id_sensore"placeholder="Inserire Sensore">
        <br>
        <input type="text" class="ricerca" name = "inizio_data" placeholder="Inizio: aaaa-mm-gg">
        <br>
        <input type="text" class="ricerca" name = "fine_data" placeholder="Fine: aaaa-mm-gg">
        <br>
        <br>
        <input type="submit" value="" class="pulsante_cerca">
    </form>
</div>

<footer>
    <input type="button" class="logout" value = "Logout" onclick="location.href='index.php'" >
    <input type="button" class="home" value = "Home" onclick="location.href='Utente_menu.php'">
</footer>

</body>
</html>

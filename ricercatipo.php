<?php

$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");
$tipo = $_POST['tipo'];
session_start();
$user = $_SESSION['username'];
$sql =("SELECT sensore.id_sens,valore,descrizione from(sensore INNER JOIN impianti_sensori on sensore.id_sens = impianti_sensori.id_sens and sensore.id_sens LIKE '$tipo%') INNER JOIN utente_impianti ON impianti_sensori.id_imp= utente_impianti.id_imp_utente and utente_impianti.username_utente = '$user'");

$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);

if($count != 0){
    echo'<p>' . 'id_sensore'."  ".'valore' ." ".'descrizione'. '</p>';
    while ($row=mysqli_fetch_array($query))
    {
        $id = $row['id_sens'];
        $valore = $row['valore'];
        $descrizione = $row['descrizione'];

        echo $id." ".$valore." ".$descrizione;
    }
}else{
    echo 'nessun sensore presente ';
}
?>

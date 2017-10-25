<?php
$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");
session_start();
$user = addslashes($_SESSION['username']);
$sql =("SELECT id_imp, indirizzo from utente_impianti INNER JOIN impianto where utente_impianti.username_utente ='$user' AND utente_impianti.id_imp_utente = impianto.id_imp;");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);

if($count != 0){
    echo "id_impianto    indirizzo";
    while ($row=mysqli_fetch_array($query))
    {
        $id = $row['id_imp'];
        $indirizzo = $row['indirizzo'];
        echo "$id $indirizzo";
    }
}else{
    echo "nessun impianto presente";
}

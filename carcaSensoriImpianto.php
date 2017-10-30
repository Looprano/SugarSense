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
            echo $id ,$valore, $descrizione;
        }
    }else{
        echo 'impianto non valido';
}
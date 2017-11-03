
<?php
include 'core.php';

$username = addslashes($_POST['Username']);
$sql =("SELECT username FROM login WHERE username ='$username''");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count === 1){

    header('location: elencoUtenti.php');

    $sql1=("DELETE FROM `login` WHERE username = '$username'");
    $query1 = mysqli_query($conn,$sql1); //questa va lasciata!!!!!!



}else{
    $errore = 2;

    header('location:Errore.php?parametro='.$errore);
}


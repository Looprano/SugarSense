
<?php
include 'core.php';
$username = addslashes($_POST['Username']);
$sql =("SELECT username FROM login WHERE username ='$username'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count === 1){
    $sql1=("DELETE FROM `login` WHERE username = '$username'");
    //$query1 = mysqli_query($conn,$sql1);
}else{
    header('location: Errore.php');
}

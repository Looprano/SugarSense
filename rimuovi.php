
<?php
$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");
$username = $_POST['Username'];

$sql =("SELECT username FROM login WHERE username ='$username'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count == 1){
    $query1 = mysqli_query($conn,"DELETE FROM `login` WHERE username = '$username'");
}else{
    echo 'Utente non presente';
}
?>
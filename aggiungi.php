<?php
include ('core.php');
$username = addslashes($_POST['Username']);
$nome =addslashes( $_POST['Nome']);
$cognome =addslashes( $_POST['Cognome']);

$cf= $_POST['Codice_Fiscale'];
$password = $_POST['Password'];

$sql =("SELECT username FROM login WHERE username ='$username'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count === 0){
    $sql1 =("INSERT INTO login(nome,cognome,codicefisc,username,password,type) VALUE('$nome','$cognome','$cf','$username','$password','user')");
    $query1 = mysqli_query($conn,$sql1);
}else{
    echo 'Username gia presente';
}


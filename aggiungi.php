<?php
$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");

$username = $_POST['Username'];
$username = filter_input(INPUT_GET,$username,FILTER_SANITIZE_STRING);
$nome = $_POST['Nome'];
$nome = filter_input(INPUT_GET,$nome,FILTER_SANITIZE_STRING);
$cognome = $_POST['Cognome'];
$cognome = filter_input(INPUT_GET,$cognome,FILTER_SANITIZE_STRING);
$cf= trim($_POST['Codice_Fiscale']);
$password = $_POST['Password'];


$sql =("SELECT username FROM login WHERE username ='$username'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count == 0){
    $sql1 =("INSERT INTO login(nome,cognome,codicefisc,username,password,type) VALUE('$nome','$cognome','$cf','$username','$password','user')");
    $query1 = mysqli_query($conn,$sql1);
}else{
    echo 'Username gia presente';
}
?>
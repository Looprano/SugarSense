
<?php

$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");
$username = (string)$_POST['Username'];
$username=filter_var($username,FILTER_SANITIZE_STRING);
$nome = $_POST['Nome'];
$nome=filter_var($nome,FILTER_SANITIZE_STRING);
$cognome = $_POST['Cognome'];
$cognome=filter_var($cognome,FILTER_SANITIZE_STRING);
$cf= $_POST['Codice_Fiscale'];
$password = $_POST['Password'];

$sql =("SELECT username FROM login WHERE username ='$username'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count == 0){
    $query1 = mysqli_query($conn,"INSERT INTO login(nome,cognome,codicefisc,username,password,type) VALUE('$nome','$cognome','$cf','$username','$password','user')");
}else{
    echo 'Username gia presente';
}
?>
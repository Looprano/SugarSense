
<?php

$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");
$username = $_POST['Username'];
$nome = $_POST['Nome'];
$cognome = $_POST['Cognome'];
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
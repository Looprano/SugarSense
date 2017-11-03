<?php
include 'core.php';
$username = addslashes($_POST['Username']);
$nome =addslashes( $_POST['Nome']);
$cognome =addslashes( $_POST['Cognome']);
$cf= addslashes($_POST['Codice_Fiscale']);
$password = addslashes($_POST['Password']);
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql =sprintf("SELECT username FROM login WHERE username ='%s'",$username);
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count === 0){
    header('location: elencoUtenti.php');

    $sql1 =sprintf("INSERT INTO login(nome,cognome,codicefisc,username,password,type) VALUE('%s','%s','%s','%s','%s','%s')",
        $nome,$cognome,$cf,$username,$hash,'user');

    if(isset($conn) && isset($sql1))
        $query1 = mysqli_query($conn,$sql1);

}else{
    $errore = <<<HTML
<h3>L'username è già in uso</h3>
HTML;

    header('location:Errore.php?parametro='.$errore);

}


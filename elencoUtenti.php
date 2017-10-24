
<?php

$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");

$sql =("SELECT nome,cognome,codicefisc,username,password,type FROM login");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);

if($count != 0){
    while ($row=mysqli_fetch_array($query))
    {
        echo '<p>'.$row['nome']." ".$row['cognome']." ".$row['codicefisc']." ".$row['username']." ".$row['password']." ".$row['type']. '</p>';
    }
}else{
    echo 'nessun utente presente';
}
?>
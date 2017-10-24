
<?php

$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");
$username = $_POST['Username'];

$sql =("SELECT nome,cognome,codicefisc,username,password,type FROM login WHERE username ='$username'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count == 1){

    while ($row=mysqli_fetch_array($query))
    {echo $row['nome']." ".$row['cognome']." ".$row['codicefisc']." ".$row['username']." ".$row['password']." ".$row['type']." "; }
}else{
    echo 'Username non presente';
}
?>
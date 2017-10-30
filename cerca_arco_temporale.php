
<?php
include 'core.php';
$impianto = addslashes($_POST['impianto']);
$sensore = addslashes($_POST['id_sensore']);
$inizio = addslashes($_POST['inizio_data']);
$fine = addslashes($_POST['fine_data']);

$sql =("SELECT nome,cognome,codicefisc,username,type FROM login WHERE username ='$username'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count === 1){
    while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
    {
        printf ( "%s %s %s %s %s\n",$row['nome'],$row['cognome'],$row['codicefisc'],$row['username'],$row['type']);
    }
}else
{
    echo 'Username non presente';
}

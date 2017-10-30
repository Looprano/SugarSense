
<?php
include 'core.php';
$impianto = addslashes($_POST['impianto']);
$sensore = addslashes($_POST['id_sensore']);
$inizio = addslashes($_POST['inizio_data']);
$fine = addslashes($_POST['fine_data']);

$sql =("SELECT valore from (sensore inner JOIN impianti_sensori on impianti_sensori.id_imp=$impianto and impianti_sensori.id_sens='$sensore' and substring(valore,1,8) BETWEEN '$inizio' and '$fine');
");
$query = mysqli_query($conn,$sql) or die("errore nei parametri");
$count = mysqli_num_rows($query);
if($count !==0 ){
    while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
    {
        printf ( "%s",$row['valore']);
    }
}else
{
    echo 'Nessuna rilevazione presente';
}

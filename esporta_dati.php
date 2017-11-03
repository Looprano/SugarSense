<?php
include 'core.php';

error_reporting(0);

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

$output = fopen("php://output", "w");

$user = addslashes($_SESSION['username']);
$sql = ("SELECT id_imp, sensore.id_sens, valore, descrizione from(sensore INNER JOIN impianti_sensori on sensore.id_sens = impianti_sensori.id_sens) INNER JOIN utente_impianti ON impianti_sensori.id_imp= utente_impianti.id_imp_utente and utente_impianti.username_utente = '$user'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);

if ($count !== 0) {

    $intestazione = array('ID Impianto', 'ID Sensore', 'Rilevazione', 'Descrizione');
    fputcsv($output, addslashes($intestazione));
    while ($row = mysqli_fetch_assoc($query)) {
        fputcsv($output, $row);
    }
} else {

    fputs($output, "Nessun sensore presente.");
}

fclose($output);
?>


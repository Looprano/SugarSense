<?php
include 'core.php';

error_reporting(0);

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

$output = fopen('php://output', 'w');

$user = addslashes($_SESSION['username']);
$sql = ("SELECT id_imp, sensore.id_sens, valore, descrizione from(sensore INNER JOIN impianti_sensori on sensore.id_sens = impianti_sensori.id_sens) INNER JOIN utente_impianti ON impianti_sensori.id_imp= utente_impianti.id_imp_utente and utente_impianti.username_utente = '$user'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);

if ($count !== 0) {

    $num = 0;
    $escape_pat = '/\s*([=+\-@])(.+)/';
    $replace = "\'$1$2";
    while ($row = mysqli_fetch_assoc($query)) {
        $sens[$num]['ID Impianto'] = intval($row['id_imp']);
        $sens[$num]['ID Sensore'] = preg_replace($escape_pat, $replace, $row['id_sens']);
        $sens[$num]['Rilevazione'] = preg_replace($escape_pat, $replace, $row['valore']);
        $sens[$num]['Descrizione'] = preg_replace($escape_pat, $replace, $row['descrizione']);
        $num++;
    }

    //fputcsv($output, array('ID Impianto', 'ID Sensore', 'Rilevazione', 'Descrizione'));

    foreach($sens as $sensore) {
        //fputcsv($output, $sensore);
    }

} else {

    //fputs($output, 'Nessun sensore presente.');
}


fclose($output);


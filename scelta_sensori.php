<?php
switch($_POST['case'])
{
    case 'Visualizza Sensori':
        header('Location: elenco_sensori.php');
        break;
    case'Ricerca per Tipo':
        header('Location: utente_sensore_tipo.php');
        break;
    case 'Ricerca per ID':
        header('Location: utente_sensore_id.php');
        break;
    default:
        header( 'Utente_sensori.php');
}
?>
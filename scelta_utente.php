<?php
switch($_POST['case'])
{
    case 'Impianti':
        header('Location: impianti.php');
        break;
    case'Sensori':
        header('Location: Utente_sensori.php');
        break;
    case 'Sintesi':
        header('Location: Utente_Sintesi.php');
        break;
    case 'Visualizza Prospetto':
        header('Location: Prospetto.php');
        break;
    case 'Visualizza Storico':
        header('Location: Utente_arco_temporale.php');
        break;
    default:
        header( 'Utente_menu.php');
}


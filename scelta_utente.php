<?php
switch($_POST['case'])
{
    case 'Impianti':
        header('Location: impianti.php');
        break;
    case'Sensori':
        header('Location: Utente_sensori.php');
        break;
    default:
        header( 'Utente_menu.php');
}

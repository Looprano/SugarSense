<?php
switch($_POST['case'])
{
    case 'Aggiungi Utente':
        header('Location: aggiungiUtente.php');
        break;
    case 'Rimuovi Utente':
        header('Location: rimuoviUtente.php');
        break;
    case 'Ricerca Utente':
        header('Location: cercaUtente.php');
        break;
    case 'Elenco Utenti':
        header('Location: elencoUtenti.php');
        break;
    case 'logout':
        header('Location:index.php');
        break;
}
?>
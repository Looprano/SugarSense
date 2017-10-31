<?php
session_start();
if(session_destroy()>0) // Destroying All Sessions
{
    header('Location: index.php'); // Redirecting To Home Page
}



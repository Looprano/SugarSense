<?php
// Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

// Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];

// mysqli_connect() function opens a new connection to the MySQL server.
    $conn = mysqli_connect("localhost", "root", "fedeneco123", "company");

// SQL query to fetch information of registerd users and finds user match.
    $query = mysqli_query($conn,"SELECT username, password, type FROM login");

    while($row = mysqli_fetch_array($query))
    {
        $db_user = $row["username"];
        $db_pass = $row["password"];


        $db_type = $row["type"];
        if($username == $db_user && $password == $db_pass)
        {
            session_start();
            $_SESSION["username"]=$db_user;
            $_SESSION["type"]=$db_type;

            if($_SESSION["type"] == 'admin'){
                header("location: iot_menu.php");
            }
            else if ($_SESSION["type"] == 'user'){
                header("location: Utente_menu.php");
            }
        }
        else {

            echo("fail");
        }
    }
}
<?php
include 'core.php';
if (isset($_POST['submit'])>0) {
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $sql1 = ("SELECT password FROM login where login.username = \"$username\";");
    $query = mysqli_query($conn, $sql1);
    $count = mysqli_num_rows($query);
    if ($count === 1) {
        while ($row = mysqli_fetch_array($query)) {
            $pass = htmlspecialchars($row['password']);
        }
        if ((password_verify($password, $pass))) {
            $sql = ("SELECT username,type FROM login where login.username = \"$username\";");
            $query = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($query);
            if ($count === 1) {
                while ($row = mysqli_fetch_array($query)) {
                    $db_user = htmlspecialchars($row['username']);
                    $db_type = htmlspecialchars($row['type']);
                    if ($username === $db_user) {
                        session_start();
                        $_SESSION['username'] = $db_user;
                        $_SESSION['type'] = $db_type;
                        
                        if ($_SESSION['type'] === 'admin') {
                            header('location: iot_menu.php');
                        } else if ($_SESSION['type'] === 'user') {
                            header('location: Utente_menu.php');
                        } else {
                            header('location: ErroreLogin.php');
                        }
                    }
                }
            }
        } else {
            header('location: ErroreLogin.php');
        }
    } else {
        header('location: ErroreLogin.php');
    }

}

<?php
include 'core.php';
if (isset($_POST['submit'])) {
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $passmd5 = md5($password);
    echo $passmd5;
    $sql= ("SELECT username,type FROM login where login.username = \"$username\" AND login.password = \"$passmd5\";");
    $query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($query);
    if($count === 1) {
        while ($row = mysqli_fetch_array($query)) {
            echo 'ciaooo';
            $db_user = $row['username'];
            $db_type = $row['type'];
            if ($username === $db_user) {
                session_start();
                $_SESSION['username'] = $db_user;
                $_SESSION['type'] = $db_type;

                if ($_SESSION['type'] === 'admin') {
                    header('location: iot_menu.php');
                } else if ($_SESSION['type'] === 'user') {
                    header('location: Utente_menu.php');
                } else {
                    echo 'Login Error';
                }
            }
        }
    }
    echo 'Username o Password non validi';
}

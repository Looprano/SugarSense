
<?php

include'login.php'; // Includes Login Script
if(isset($_SESSION['login_user'])){
    header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SugarSense</title>
    <link href="theme.css" rel="stylesheet" type="text/css">
</head>


<body background="nature-fields-grass-flower-blur-photography.jpg">
<h1>SUGARSENSE</h1>

<div id="Login" style="text-align: center">
    <form title="Login" action="login.php" method="post">
        <input name = "username" type="text" placeholder="Username" class="accesso"><br />
        <input name = "password" type="password" placeholder="Password" class="accesso"><br />
        <input name="submit" type="submit" value=" Login ">
    </form>
</div>

</body>
</html>

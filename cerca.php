
<?php

$conn = mysqli_connect("localhost", "root", "fedeneco123", "company");
$username = addslashes($_POST['Username']);

$sql =("SELECT nome,cognome,codicefisc,username,type FROM login WHERE username ='$username'");
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
if($count == 1){

    while ($row=mysqli_fetch_array($query))
    {
        $nome = $row['nome'];
        $cognome = $row['cognome'];
        $codicef = $row['codicefisc'];
        $user = $row['username'];
        $tipo = $row['type'];

        echo $nome," ",$cognome," ",$codicef," ",$user," ",$tipo," "; }
}else
    {
    echo 'Username non presente';
}
?>
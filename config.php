<?php

$username = "Tarini.G";
$password="tarini*27T";
$server ="127.0.0.1";
$db = "sparks_bank";


$conn = mysqli_connect($server,$username,$password,$db);

if($conn)
//echo "Connection successful";
{
    ?>
    <script>
        alert('Connection Successful');
    </script>
    <?php
}
else
{
    echo "No connection";
    die("no connection".mysqli_connect_error());//exit
}



?>
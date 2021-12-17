<?php

$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "dulich";
$connect = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME);
if (!$connect) {
    die("không nết nối được vào MySQL server");
}
?> 
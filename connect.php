<?php

$USER = "root";
$PASSWORD = "";
$HOST = "localhost";
$DATABASE = "tokobuku";

$conn = mysqli_connect($HOST,$USER,$PASSWORD);
$db = mysqli_select_db($conn,$DATABASE);

?>

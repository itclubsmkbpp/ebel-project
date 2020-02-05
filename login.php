<?php

include ('connect.php');
session_start();

if(isset($_POST['login'])){

$username = htmlentities($_POST['username']);
$password = htmlentities($_POST['password']);
$level = htmlentities($_POST['level']);

$lvl = "";

$USER = mysqli_real_escape_string($conn, $username);
$PASSWORD = mysqli_real_escape_string($conn, $password);

$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$USER'") or die (mysqli_error());

if(mysqli_rum_rows($sql) == 0){
  echo '<script language = "javascript">alert("User tidak ditemukan")</script>';
}else{

  $row = mysqli_fetch_assoc($sql);
  
  $user_level = $row['level'];
  $user_pass = $row['password'];
  

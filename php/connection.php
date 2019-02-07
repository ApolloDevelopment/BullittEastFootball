<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'stats';

$conn = mysqli_connect($server, $username, $password, $db);

if(!$conn){
  die("Error Connecting!: " . mysqli_connect_error());
}



?>

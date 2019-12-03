<?php
session_start();
$servername = "localhost";
$serverUsername = "id11702576_phpproductmarket";
$serverPassword = "bois3";
$dbname = "id11702576_marketplace";

 $conn = new mysqli($servername, $serverUsername, $serverPassword, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
  extract( $_POST );
 $sql = "SELECT * FROM users WHERE username = '$user_name' and pass_word = '$pass_word'";
 $res = $conn->query($sql);
 if(!$res) {
     echo "err: " . $conn->error;
 }
 else if ($res->num_rows == 0) {
   $_SESSION['fail'] = "Login failed!";
   header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
   exit;

 } else {
   unset($_SESSION['fail']);
   $_SESSION['username'] = $user_name;
   $array = array();
   $_SESSION['bHistory'] = array();
   $_SESSION['cHistory'] = array();
   $_SESSION['sHistory'] = array();
   header("Location: https://phpproductmarket.000webhostapp.com/services.php");
   exit;
 }
 $conn->close();
 ?>

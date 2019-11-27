<?php
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
   header("Location: http://www.geeksforgeeks.org");
   exit;
     // echo "err: " . $conn->error;
 }
 else {
   header("Location: http://www.yahoo.com");
   exit;
 }
 $conn->close();
 ?>

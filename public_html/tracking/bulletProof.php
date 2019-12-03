<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

echo "<body>";
echo "<h2>BulletProof Pages Visited by " . $_SESSION['username'] . "</h2>";

$pages = $_SESSION["bHistory"];
echo "<ul>";
foreach(array_reverse($pages) as $key => $value){
   echo "<li>";
   echo $value;
   echo "</li>";
}

echo "</ul>";

echo "</body>";

?>

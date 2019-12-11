<?php

    require_once('../database_credentials.php');
    require_once("../php/utilities.php");

    session_start();
    if(!isset($_SESSION['username'])){
      header("Location: /php/login.php");
      exit;
    }

    $page_name = "Audi R8";
    $visited = false;
    $pages = $_SESSION['cHistory'];
    foreach($pages as $key => $value){
      if($value == $page_name){
        $visited = true;
      }
    }
    if(!$visited){
      array_push($pages, $page_name);
      $_SESSION['cHistory'] = $pages;
    }
    incrementNumUsers($servername, $serverUsername, $serverPassword, $dbname, $page_name);

    if(isset($_POST['review_text']) && isset($_POST['rating'])) {
      $username = $_SESSION['username'];
      $review_text = $_POST['review_text'];
      $rating = $_POST['rating'];
      addReview($servername, $serverUsername, $serverPassword, $dbname, $username, $review_text, $rating, $page_name);
    }

//     echo<<<ENDL
//     <h1>Audi R8</h1>
//     <img src='https://www.topgear.com/sites/default/files/styles/large/public/cars-car/carousel/2018/11/a1813694_large.jpg?itok=DCVn38mf' alt='Audi R8'><br>
//     <h2>Vehicle Details</h2>
//     <ul>
//         <li>Horsepower: 611 hp</li>
//         <li>Torque: 417 lb-ft</li>
//         <li>Fuel Economy: 13 city / 20 highway</li>
//         <li>0 - 60 MPH time: 3.2 seconds</li>
//     </ul>
// ENDL;

    $this_file_name = basename(__FILE__);
    $curl_url = "https://farokhcarrentalservice.000webhostapp.com/services/" . $this_file_name;
    $ch = curl_init($curl_url);
    $fp = fopen("product_page.txt", "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    curl_close($ch);

    echo file_get_contents("product_page.txt");
    fclose($fp);

  getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);
?>

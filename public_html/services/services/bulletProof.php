<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "BulletProof";
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <body>
                <h1><b>BulletProof</b></h1>
    <p>We've worked with the iOS masters at Apple on this one to accomplish software feats the world has never dreamt of, for your peace of mind. Our premier app, BulletProof, emits a range of high-frequency light from the in-built smart phone photo light shutter, which temporarily causes both blindness and deafness in the target. These lights also cause loss of muscle control which make the shooter unable to contract the muscles necessary to move, much less hold or fire a gun. Clinically proven!</p>

    <p>To pass legal approval, we have paired this with our gun detection technology to only emit such beams of light when the person passes the test of active shooter listed above. Stop a mass shooting in its tracks and ensure everyone gets to safety, from the convenience of your smart phone.</p>
    <img src='../img/bp1.jpg' alt='BP1' height='300' width='200'>
                  </body>
ENDL;
?>

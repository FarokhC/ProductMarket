<?php
    $page_name = "Koenigsegg One:1";
    require_once("../php/previous_visited_cookies.php");
    handle_last_five_pages_visited($page_name);
    echo<<<ENDL
    <h1>Koenigsegg</h1>
    <h2>Vehicle Details</h2>
    <img src='https://hips.hearstapps.com/hmg-prod/amv-prod-cad-assets/images/14q4/638369/2015-koenigsegg-one1-first-drive-review-car-and-driver-photo-654233-s-original.jpg?fill=2:1&resize=480:*' alt='Koenigsegg One:1'><br>
ENDL;
?>
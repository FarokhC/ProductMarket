<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
    exit;
  }

  if(isset($_GET['logout'])){
    unset($_SESSION['username']);
    header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
    exit;
  }

  echo "<a href = '/services.php?logout=true'>Logout</a><br>";

  echo "<h1>Car Rental Company Products and Services</h1>";

    echo "<h2>Car Rentals</h2>";
    echo<<<ENDL
    <a href='/services/audi_r8.php'>Audi R8</a>
    - \$900 a day - Free 1 hour trial<br>
    <img src='https://www.topgear.com/sites/default/files/styles/large/public/cars-car/carousel/2018/11/a1813694_large.jpg?itok=DCVn38mf' alt='Audi R8'><br>
    <br>
ENDL;
    echo<<<ENDL
        <a href='/services/koenigsegg_one_1.php'>Koenigsegg One:1</a>
        - \$3500 a day - Free 1 hour trial<br>
        <img src='https://hips.hearstapps.com/hmg-prod/amv-prod-cad-assets/images/14q4/638369/2015-koenigsegg-one1-first-drive-review-car-and-driver-photo-654233-s-original.jpg?fill=2:1&resize=480:*' alt='Koenigsegg One:1'><br>
        <br>
ENDL;
    echo<<<ENDL
        <a href='/services/toyota_prius.php'>Toyota Prius</a>
        - \$40 a day - Free 1 hour trial<br>
        <img src='https://i.gaw.to/content/photos/38/92/389207_2020_Toyota_Prius.jpg?280x175' alt='Toyota Prius'><br>
        <br>
ENDL;
    echo<<<ENDL
        <a href='/services/quartz_regalia.php'>Quartz Regalia</a>
        - \$5000 a day - Free 1 hour trial<br>
        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKErVy370d23wGFcVdo1KwWdDdUdqIh0LDElJ_z3vottjWSDIo' alt='Quartz Regalia'><br>
        <br>
ENDL;
    echo "<h2>Car Services</h2>";
    echo <<<ENDL
        <a href='/services/car_wash.php'>Car Wash</a>
        - \$50 - Premium car wash and polish<br>
        <img src='https://i.guim.co.uk/img/media/2ad114b11497f26aa9707389ebae56a4ad7c630b/0_0_7360_4417/master/7360.jpg?width=300&quality=85&auto=format&fit=max&s=a43f46a7cfe4489a8cd6c9f525ed1bc1' alt='Quartz Regalia'><br>
        <br>
ENDL;
    echo <<<ENDL
        <a href='/services/oil_change.php'>Oil Change</a>
        - \$75 - Oil change and filter replacement<br>
        <img src='https://cka-dash.s3.amazonaws.com/082-0618-CA148/mainimage.jpg' alt='Quartz Regalia'><br>
        <br>
ENDL;
    echo <<<ENDL
        <a href='/services/brake_service.php'>Brake Service</a>
        - \$250 - Brake pad replacement and brake rotor resurfacing<br>
        <img src='https://images-stag.jazelc.com/uploads/sampacksfivestarfordoflewisville/Service-Brakes-Roter.jpeg' alt='Quartz Regalia'><br>
        <br>
ENDL;
echo <<<ENDL
        <a href='/services/coolant_flush.php'>Coolant Flush</a>
        - \$100 Coolant replacement<br>
        <img src='https://www.carcrafters.com/wp-content/uploads/2016/10/CarCrafters_Blog_Coolant.jpg' alt='Quartz Regalia'><br>
        <br>
ENDL;
    echo <<<ENDL
        <a href='/services/glass_repair.php'>Cracked Glass Repair</a>
        - \$75 - Glass chip repair<br>
        <img src='https://ig3zfrbsnd-flywheel.netdna-ssl.com/wp-content/uploads/2017/04/feature-1140x570.jpg' alt='Quartz Regalia'><br>
        <br>
ENDL;
    echo <<<ENDL
        <a href='/services/windshield_replacement.php'>Windshield Replacement</a>
        - \$400 Whole windshield replacement<br>
        <img src='https://www.a-1autoglass.com/wp-content/uploads/2013/09/windshield-replacement.jpg' alt='Quartz Regalia'><br>
        <br>
ENDL;

  echo "<h1>BulletProof Products</h1>";
  echo <<<ENDL
  <h3><b><a href = "../services/gunDetection.php">Gun Detection App</a></b></h3>

  <h3><b><a href = "../services/bulletProof.php">BulletProof</a></b></h3>

  <h3><b><a href = "../services/playDead.php">PlayDead</a></b></h3>

  <h3><b><a href = "../services/freqOut.php">FreqOut</a></b></h3>

  <h3><b><a href = "../services/iGun.php">iGun</a></b></h3>

  <h3><b><a href = "../services/stressBot.php">Stress Bot</a></b></h3>

  <h3><b><a href = "../services/halo.php">Halo</a></b></h3>

  <h3><b><a href = "../services/bodyArmor.php">BodyArmor</a></b></h3>

  <h3><b><a href = "../services/swatAway.php">SwatAway</a></b></h3>

  <h3><b><a href = "../services/coffeeMug.php">Coffee Mug</a></b></h3><br><br>
ENDL;

  echo "<h1>Smart AI Product<h1>";
?>

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

  if(isset($_GET['logout'])){
    unset($_SESSION['username']);
    unset($_SESSION['bHistory']);
    unset($_SESSION['cHistory']);
    unset($_SESSION['sHistory']);

    header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
    exit;
  }

  echo<<<ENDL
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online MarketPlace</title>
  	<link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  	<link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
ENDL;


  echo "<a href = '/services.php?logout=true'>Logout</a><br>";


  echo<<<ENDL
  <section class="related-product-area">
		<div class="container">
			<div class="section-intro pb-60px">
        <p><a></a></p>
        <h2>Top <span class="section-intro__style">Product</span></h2>
      </div>
			<div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-1.png" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Gray Coffee Cup</a>
                  <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-2.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-3.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-4.png" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Gray Coffee Cup</a>
                  <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-5.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-6.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-7.png" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Gray Coffee Cup</a>
                  <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-8.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-9.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-1.png" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Gray Coffee Cup</a>
                  <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-2.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="img/product/product-sm-3.png" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Gray Coffee Cup</a>
                <div class="price">$170.00</div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</section>
ENDL;

  echo "<h1>Car Rental Company Products and Services</h1>";

  echo "<p><a href = '/tracking/carRental.php'>Car Rental Company Pages visited by " . $_SESSION['username'] . "</a></p>";
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
  echo "<p><a href = '/tracking/bulletProof.php'>BulletProof Pages visited by " . $_SESSION['username'] . "</a></p>";
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

  echo "<h1>Smart AI Product</h1>";
  echo "<p><a href = '/tracking/smart.php'>Smart AI Pages visited by " . $_SESSION['username'] . "</a></p>";

  echo <<<ENDL
  <h3><b><a href = "../services/smart_agriculture.php">Smart Agriculture Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_banking.php">Smart Banking Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_city.php">Smart City Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_driving.php">Smart Driving Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_gaming.php">Smart Gaming Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_healthcare.php">Smart Healthcare Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_media.php">Smart Media Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_monitoring.php">Smart Monitoring Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_nlp.php">Smart Natual Language Processing Solutions</a></b></h3>

  <h3><b><a href = "../services/smart_shopping.php">Smart Shopping Solutions</a></b></h3><br><br>
ENDL;

?>

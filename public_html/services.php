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

  // echo "<a href = '/services.php?logout=true'>Logout</a><br>";

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

  echo<<<ENDL
  <section class="blog-banner-area" id="category">
  <div class="container h-100">
    <div class="blog-banner">
      <div class="text-center">
        <h1>Shop Our Marketplace</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><font color = "blue"><a href='/services.php?logout=true'>Logout</a></font></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  </section>
  <br><br>

  <section class="related-product-area">
		<div class="container">
			<div class="section-intro pb-60px">
        <h2>Car Rental Company Products and Services</span></h2>
        <p><a href = '/tracking/carRental.php'>Car Rental Company Pages visited by $_SESSION[username]</a></p>
      </div>
			<div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href='/services/audi_r8.php'><img src='https://www.topgear.com/sites/default/files/styles/large/public/cars-car/carousel/2018/11/a1813694_large.jpg?itok=DCVn38mf' alt=""></a>
              <div class="desc">
                  <a href='/services/audi_r8.php' class="title">Audi R8</a>
                  <div class="price">$900 a day - Free 1 hour trial</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href='/services/koenigsegg_one_1.php'><img src='https://hips.hearstapps.com/hmg-prod/amv-prod-cad-assets/images/14q4/638369/2015-koenigsegg-one1-first-drive-review-car-and-driver-photo-654233-s-original.jpg?fill=2:1&resize=480:*' alt=""></a>
              <div class="desc">
                  <a href='/services/koenigsegg_one_1.php' class="title">Koenigsegg One:1</a>
                  <div class="price">$3500 a day - Free 1 hour trial</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href='/services/toyota_prius.php'><img src=https://i.gaw.to/content/photos/38/92/389207_2020_Toyota_Prius.jpg?280x175'D alt=""></a>
              <div class="desc">
                  <a href='/services/toyota_prius.php' class="title">Toyota Prius</a>
                  <div class="price">$40 a day - Free 1 hour trial</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href='/services/quartz_regalia.php'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKErVy370d23wGFcVdo1KwWdDdUdqIh0LDElJ_z3vottjWSDIo' alt=""></a>
              <div class="desc">
                  <a href='/services/quartz_regalia.php' class="title">Quartz Regalia</a>
                  <div class="price">$5000 a day - Free 1 hour trial</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href='/services/car_wash.php'><img src='https://i.guim.co.uk/img/media/2ad114b11497f26aa9707389ebae56a4ad7c630b/0_0_7360_4417/master/7360.jpg?width=300&quality=85&auto=format&fit=max&s=a43f46a7cfe4489a8cd6c9f525ed1bc1' alt=""></a>
              <div class="desc">
                  <a href='/services/car_wash.php' class="title">Car Wash</a>
                  <div class="price">$50 - Premium car wash and polish</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href='/services/oil_change.php'><img src='https://cka-dash.s3.amazonaws.com/082-0618-CA148/mainimage.jpg' alt=""></a>
              <div class="desc">
                  <a href='/services/oil_change.php' class="title">Oil Change</a>
                              <div class="price">$75 - Oil change and filter replacement</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href='/services/brake_service.php'><img src='https://images-stag.jazelc.com/uploads/sampacksfivestarfordoflewisville/Service-Brakes-Roter.jpeg' alt=""></a>
              <div class="desc">
                  <a href='/services/brake_service.php' class="title">Brake Service</a>
                                  <div class="price">$250 - Brake pad replacement and brake rotor resurfacing</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href='/services/coolant_flush.php'><img src='https://www.carcrafters.com/wp-content/uploads/2016/10/CarCrafters_Blog_Coolant.jpg' alt=""></a>
              <div class="desc">
                  <a href='/services/coolant_flush.php' class="title">Coolant Flush</a>
                                  <div class="price">$100 Coolant replacement</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href='/services/glass_repair.php'><img src='https://ig3zfrbsnd-flywheel.netdna-ssl.com/wp-content/uploads/2017/04/feature-1140x570.jpg' alt=""></a>
              <div class="desc">
                  <a href='/services/glass_repair.php' class="title">Cracked Glass Repair</a>
                                  <div class="price">$75 - Glass chip repair</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href='/services/windshield_replacement.php'><img src='https://www.a-1autoglass.com/wp-content/uploads/2013/09/windshield-replacement.jpg' alt=""></a>
              <div class="desc">
                  <a href='/services/windshield_replacement.php' class="title">Windshield Replacement</a>
                  <div class="price">$400 Whole windshield replacement</div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</section>
  <br><br>

  <section class="related-product-area">
    <div class="container">
      <div class="section-intro pb-60px">
        <h2>BulletProof Products</span></h2>
        <p><a href = '/tracking/bulletProof.php'>BulletProof Pages visited by $_SESSION[username]</a></p>
      </div>
      <div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="../services/gunDetection.php"><img src="../img/gd1.jpg" alt=""></a>
              <div class="desc">
                  <a href="../services/gunDetection.php" class="title">Gun Detection App</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/bulletProof.php"><img src='../img/bp1.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/bulletProof.php" class="title">BulletProof</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/playDead.php"><img src='../img/pd.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/playDead.php" class="title">PlayDead</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="../services/freqOut.php"><img src='../img/fo1.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/freqOut.php" class="title">FreqOut</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/iGun.php"><img src='../img/ig.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/iGun.php" class="title">iGun</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/stressBot.php"><img src='../img/sb1.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/stressBot.php" class="title">Stress Bot</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="../services/halo.php"><img src='../img/halo1.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/halo.php" class="title">Halo</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/swatAway.php"><img src='../img/swat.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/swatAway.php" class="title">SwatAway</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/bodyArmor.php"><img src='../img/ba.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/bodyArmor.php" class="title">BodyArmor</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="../services/coffeeMug.php"><img src='../img/cof.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/coffeeMug.php"class="title">Coffee Mug</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br><br>

  <section class="related-product-area">
    <div class="container">
      <div class="section-intro pb-60px">
        <h2>Smart AI Products</span></h2>
        <p><a href = '/tracking/smart.php'>Smart AI Pages visited by $_SESSION[username]</a></p>
      </div>
      <div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="../services/smart_agriculture.php"><img src='https://miro.medium.com/max/612/1*IhuQZDtRCURAyCbwUnV-ng.jpeg' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_agriculture.php" class="title">Smart Agriculture Solutions</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/smart_banking.php"><img src='https://www.axis.com/blog/secure-insights/wp-content/uploads/sites/11/2019/01/banking_network_audio_analytics.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_banking.php" class="title">Smart Banking Solutions</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/smart_city.php"><img src='https://cdn.ttgtmedia.com/rms/onlineImages/iota-smart_city_components.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_city.php" class="title">Smart City Solutions</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="../services/smart_driving.php"><img src='https://zykotech.com/wp-content/uploads/2017/01/ADAS-solution-1170x658.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_driving.php" class="title">Smart Driving Solutions</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/smart_gaming.php"><img src='http://www.aigameresearch.org/wp-content/uploads/2012/06/AIGRMainNormal.png' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_gaming.php" class="title">Smart Gaming Solutions</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/smart_healthcare.php"><img src='https://revcycleintelligence.com/images/site/features/2018-11-29_Healthcare_workforce_managment.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_healthcare.php" class="title">Smart Healthcare Solutions</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="../services/smart_media.php"><img src='https://static.techspot.com/images2/news/bigimage/2017/09/2017-09-29-image-9.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_media.php" class="title">Smart Media Solutions</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/smart_monitoring.php"><img src='https://www.x-logic.net/img/projects/project-4.jpg' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_monitoring.php" class="title">Smart Monitoring Solutions</a>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="../services/smart_nlp.php"><img src='https://inlpcenter.org/wp-content/uploads/2016/10/what-is-nuero-linguistic-programming.png' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_nlp.php" class="title">Smart Natual Language Processing Solutions</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="../services/smart_shopping.php"><img src='https://www.edgeverve.com/wp-content/uploads/2018/12/Smart-Shopping-Assistant-1.png' alt=""></a>
              <div class="desc">
                  <a href="../services/smart_shopping.php" class="title">Smart Shopping Solutions</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
ENDL;

?>

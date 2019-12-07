<?php
    session_start();

    // if(isset($_SESSION['fail'])){
    //   echo $_SESSION['fail'];
    //   echo "<br>";
    // }

    $session_error = "";
    if(isset($_SESSION['fail'])) {
      $session_error = $_SESSION['fail'];
    }

    echo<<<ENDL
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login</title>
      <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    	<link rel="stylesheet" href="vendors/linericon/style.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
      <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
      <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

      <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <section class="login_box_area section-margin">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">

            <div class="login_form_inner">
              <h5><font color = "red">$session_error</font></h5>
              <h3>Log in to enter</h3>
              <form class="row login_form" method = "post" action="/php/checkLogin.php" id="contactForm" >
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" name="user_name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                </div>
                <div class="col-md-12 form-group">
                  <input type="password" class="form-control" name="pass_word" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                </div>
                <div class="col-md-12 form-group">
                  <button type="submit" value="submit" class="button button-login w-100">Log In</button>
                </div>
              </form>
              <br><br>
                  <h4>New to our website?</h4>
                  <a href="../php/make_account.php">Create an Account</a>

            </div>
          </div>
        </div>
      </div>
    </section>


</body>
ENDL;


  unset($_SESSION ['fail']);
?>


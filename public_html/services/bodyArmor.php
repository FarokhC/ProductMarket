<?php

require_once('../database_credentials.php');
require_once("../php/utilities.php");
session_start();
// $pages = $_SESSION['bHistory'];
// array_push($pages, "BodyArmor");
// $_SESSION['bHistory'] = $pages;
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
} else {

    $page_name = "BodyArmor";
    $visited = false;
    $pages = $_SESSION['bHistory'];
    foreach($pages as $key => $value){
      if($value == $page_name){
        $visited = true;
      }
    }
    if(!$visited){
      array_push($pages, $page_name);
      $_SESSION['bHistory'] = $pages;
    }
    incrementNumUsers($servername, $serverUsername, $serverPassword, $dbname, $page_name);

    if(isset($_POST['review_text']) && isset($_POST['rating'])) {
      $username = $_SESSION['username'];
      $review_text = $_POST['review_text'];
      $rating = $_POST['rating'];
      addReview($servername, $serverUsername, $serverPassword, $dbname, $username, $review_text, $rating, $page_name);
      }


    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
//     echo<<<ENDL
//     <html lang="en">
// <head>
//   <meta charset="UTF-8">
//   <meta name="viewport" content="width=device-width, initial-scale=1.0">
//   <meta http-equiv="X-UA-Compatible" content="ie=edge">
//   <title>$page_name</title>
//   <link rel="stylesheet" href="../vendors/bootstrap/bootstrap.min.css">
//   <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
// 	<link rel="stylesheet" href="../vendors/themify-icons/themify-icons.css">
// 	<link rel="stylesheet" href="../vendors/linericon/style.css">
//   <link rel="stylesheet" href="../vendors/nice-select/nice-select.css">
//   <link rel="stylesheet" href="../vendors/owl-carousel/owl.theme.default.min.css">
//   <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
//
//   <link rel="stylesheet" href="../css/style.css">
// </head>
// <body>
// <div class="product_image_area">
//   <div class="container">
//     <div class="row s_product_inner">
//       <div class="col-lg-6">
//
//           <div class="single-prd-item">
//             <img class="img-fluid" src="../img/ba.jpg">
//           </div>
//
//       </div>
//       <div class="col-lg-5 offset-lg-1">
//         <div class="s_product_text">
//           <h3>$page_name</h3>
//           <p>Explore our range of signature hoodies, t-shirts, polo shirts, and button down shirts....all
//           legitametely bullet proof!</p>
//         </div>
//       </div>
//     </div>
//   </div>
// </div>
//
// <section class="product_description_area">
//   <div class="container">
//     <div class="tab-content" id="myTabContent">
//       <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
//         <div class="row">
//           <div class="col-lg-6">
//             <div class="comment_list">
//               <div class="review_item">
//                 <div class="media">
//                   <div class="d-flex">
//                     <img src="img/product/review-1.png" alt="">
//                   </div>
//                   <div class="media-body">
//                     <h4>Blake Ruiz</h4>
//                     <h5>12th Feb, 2018 at 05:56 pm</h5>
//                     <a class="reply_btn" href="#">Reply</a>
//                   </div>
//                 </div>
//                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
//                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
//                   commodo</p>
//               </div>
//               <div class="review_item reply">
//                 <div class="media">
//                   <div class="d-flex">
//                     <img src="img/product/review-2.png" alt="">
//                   </div>
//                   <div class="media-body">
//                     <h4>Blake Ruiz</h4>
//                     <h5>12th Feb, 2018 at 05:56 pm</h5>
//                     <a class="reply_btn" href="#">Reply</a>
//                   </div>
//                 </div>
//                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
//                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
//                   commodo</p>
//               </div>
//               <div class="review_item">
//                 <div class="media">
//                   <div class="d-flex">
//                     <img src="img/product/review-3.png" alt="">
//                   </div>
//                   <div class="media-body">
//                     <h4>Blake Ruiz</h4>
//                     <h5>12th Feb, 2018 at 05:56 pm</h5>
//                     <a class="reply_btn" href="#">Reply</a>
//                   </div>
//                 </div>
//                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
//                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
//                   commodo</p>
//               </div>
//             </div>
//           </div>
//           <div class="col-lg-6">
//             <div class="review_box">
//               <h4>Post a comment</h4>
//               <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
//                 <div class="col-md-12">
//                   <div class="form-group">
//                     <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
//                   </div>
//                 </div>
//                 <div class="col-md-12">
//                   <div class="form-group">
//                     <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
//                   </div>
//                 </div>
//                 <div class="col-md-12">
//                   <div class="form-group">
//                     <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
//                   </div>
//                 </div>
//                 <div class="col-md-12">
//                   <div class="form-group">
//                     <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
//                   </div>
//                 </div>
//                 <div class="col-md-12 text-right">
//                   <button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
//                 </div>
//               </form>
//             </div>
//           </div>
//         </div>
//       </div>
//       <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
//         <div class="row">
//           <div class="col-lg-6">
//             <div class="row total_rate">
//               <div class="col-6">
//                 <div class="box_total">
//                   <h5>Overall</h5>
//                   <h4>4.0</h4>
//                   <h6>(03 Reviews)</h6>
//                 </div>
//               </div>
//               <div class="col-6">
//                 <div class="rating_list">
//                   <h3>Based on 3 Reviews</h3>
//                   <ul class="list">
//                     <li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
//                          class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
//                     <li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
//                          class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
//                     <li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
//                          class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
//                     <li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
//                          class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
//                     <li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
//                          class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
//                   </ul>
//                 </div>
//               </div>
//             </div>
//             <div class="review_list">
//               <div class="review_item">
//                 <div class="media">
//                   <div class="d-flex">
//                     <img src="img/product/review-1.png" alt="">
//                   </div>
//                   <div class="media-body">
//                     <h4>Blake Ruiz</h4>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                   </div>
//                 </div>
//                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
//                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
//                   commodo</p>
//               </div>
//               <div class="review_item">
//                 <div class="media">
//                   <div class="d-flex">
//                     <img src="img/product/review-2.png" alt="">
//                   </div>
//                   <div class="media-body">
//                     <h4>Blake Ruiz</h4>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                   </div>
//                 </div>
//                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
//                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
//                   commodo</p>
//               </div>
//               <div class="review_item">
//                 <div class="media">
//                   <div class="d-flex">
//                     <img src="img/product/review-3.png" alt="">
//                   </div>
//                   <div class="media-body">
//                     <h4>Blake Ruiz</h4>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                     <i class="fa fa-star"></i>
//                   </div>
//                 </div>
//                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
//                   dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
//                   commodo</p>
//               </div>
//             </div>
//           </div>
//           <div class="col-lg-6">
//             <div class="review_box">
//               <h4>Add a Review</h4>
//               <p>Your Rating:</p>
//               <ul class="list">
//                 <li><a href="#"><i class="fa fa-star"></i></a></li>
//                 <li><a href="#"><i class="fa fa-star"></i></a></li>
//                 <li><a href="#"><i class="fa fa-star"></i></a></li>
//                 <li><a href="#"><i class="fa fa-star"></i></a></li>
//                 <li><a href="#"><i class="fa fa-star"></i></a></li>
//               </ul>
//               <p>Outstanding</p>
//               <form action="#/" class="form-contact form-review mt-3">
//                 <div class="form-group">
//                   <input class="form-control" name="name" type="text" placeholder="Enter your name" required>
//                 </div>
//                 <div class="form-group">
//                   <input class="form-control" name="email" type="email" placeholder="Enter email address" required>
//                 </div>
//                 <div class="form-group">
//                   <input class="form-control" name="subject" type="text" placeholder="Enter Subject">
//                 </div>
//                 <div class="form-group">
//                   <textarea class="form-control different-control w-100" name="textarea" id="textarea" cols="30" rows="5" placeholder="Enter Message"></textarea>
//                 </div>
//                 <div class="form-group text-center text-md-right mt-3">
//                   <button type="submit" class="button button--active button-review">Submit Now</button>
//                 </div>
//               </form>
//             </div>
//           </div>
//         </div>
//       </div>
//     </div>
//   </div>
// </section>
// ENDL;
echo<<<ENDL
<h1><b>BodyArmor</b></h1>
<p>Explore our range of signature hoodies, t-shirts, polo shirts, and button down shirts....all
legitametely bullet proof!</p>
<img src='../img/ba.jpg' alt='B' height='300' width='300'>
  </body>";
ENDL;

getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

// <h1><b>BodyArmor</b></h1>
// <p>Explore our range of signature hoodies, t-shirts, polo shirts, and button down shirts....all
// legitametely bullet proof!</p>
// <img src='../img/ba.jpg' alt='BP1' height='300' width='300'>
//   </body>
}
?>

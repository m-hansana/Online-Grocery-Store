<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>Why Choose Us?</h3>
         <p><b>Welcome to our Contact Us Section! </b></br>
         To get in touch with us, you can fill out the contact form on this page or reach out to us via phone or email. Our customer service team is available to help you with anything from product inquiries to order tracking.</br>
         Thank you for choosing our grocery store. We look forward to hearing from you and helping you with your grocery needs!!
      </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about - img.jpg" alt="">
         <h3>What We Provide?</h3>
         <p><b>Welcome to our Provide section!</b></br>
         Here, you'll find a variety of products that are locally sourced and sustainably produced. We work directly with farmers and suppliers who share our values of quality, freshness, and environmental responsibility.</br>
         By choosing products from our Provide section, you can feel good about your purchase knowing that you're supporting local communities and contributing to a more sustainable future.
      </p>
         <a href="shop.php" class="btn">Our Shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <h3>Haritha Hansana</h3>
         <p>"I am so impressed with the selection and convenience of this online grocery store. It has everything I need, and the delivery is always prompt and reliable. It's great to be able to shop from home and have groceries delivered right to my door."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <h3>Bhagya Sewmini</h3>
         <p>"I recently tried the online grocery shopping service for the first time, and I was blown away by how easy and efficient it was. The website is user-friendly, and the prices are competitive. I will definitely be using this service again in the future."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <h3>Nimesh Silva</h3>
         <p>"The quality of the products from this online grocery store is top-notch. Everything arrives fresh and well-packaged, and I love that I can trust the sourcing and sustainability of the products I purchase."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <h3>Ravini Dilsha</h3>
         <p>"I appreciate the attention to detail and the personalized service I receive from the customer service team at this online grocery store. They are always available to answer my questions and provide helpful recommendations."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <h3>john deo</h3>
         <p>"I love the convenience of being able to shop for groceries online, especially during these times. This online grocery store has made my life so much easier, and I appreciate the variety of products they offer."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
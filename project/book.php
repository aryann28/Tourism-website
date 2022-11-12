<?php

    include "navigation.php";
    
?>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>
      * {
        box-sizing: border-box;
      }
      
      .column {
        float: left;
        width: 33.33%;
        padding: 5px;
      }
      
      /* Clearfix (clear floats) */
      .row::after {
        content: "";
        clear: both;
        display: table;
      }
      </style>
</head>
<body>
   
<!-- header section starts  -->
<!--
<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
   -->
<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section>
   <h2><a href="hotel.php">Book your Hotels</a></h2><br>
   <!-- <img src="1.jpeg" width="400" height="400" > -->
   <div class="row">
      <div class="column">
       <a href="hotel.php"> <img src="1.jpeg" alt="Shalimar" style="width:90%"></a>
      </div>
      <div class="column">
         <a href="hotel.php"> <img src="2.jpeg" alt="Taj" style="width:100%"></a>
      </div>
      <div class="column">
         <a href="hotel.php">  <img src="3.jpeg" alt="Landmark" style="width:90%"></a>
      </div>
    </div>
   <h2><a href="flight.php">Book your Flight</a></h2><br>
   <div class="row">
      <div class="column">
       <a href="flight.php"> <img src="4.jpeg" alt="Shalimar" style="width:100%"></a>
      </div>
      <div class="column">
         <a href="flight.php"> <img src="5.jpg" alt="Taj" style="width:100%"></a>
      </div>
      <div class="column">
         <a href="flight.php">  <img src="6.jpg" alt="Landmark" style="width:90%"></a>
      </div>
    </div>
   <!-- <h2><a href="hotel.php">Book your Train</a></h2> -->
</section>

<!-- booking section ends -->


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</php>
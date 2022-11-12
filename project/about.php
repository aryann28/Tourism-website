
  <?php

include "navigation.php";

?>  
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>
<!-- about section starts  -->
<section class="about">
   <div class="image">
      <img src="images/about-us.jpg" alt="">
   </div>
   <div class="content">
      <h3>why choose us?</h3>
      <p><b>Honest prices</b> for tours, and a huge selection of destinations will not leave indifferent even avid tourist.<br>

         <b>Reliable partners</b> We work with the best tour operators who over the years have proven their professionalism.<br>
         
         <b>Full Service</b> Everything that a tourist may need when going abroad, in addition to the ticket.
         </p>
      <p> <b>Quality Guarantee</b> You do not have to worry about paperwork necessary documents.<br>
         
         <b>Full support </b> contacting us, you get full support, from choosing the tour and ending with advice on what to take with you on a trip.<br>
         
         <b>Document processing</b> With us you won't have to worry about processing the necessary documents.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>
</section>
<!-- about section ends -->
<!-- reviews section starts  -->
<section class="reviews">
   <h1 class="heading-title"> clients reviews </h1>
   <div class="swiper reviews-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Greatest tour, greatest circuit, greatest leaders!
               We had lost of fun and learned a lot about the country and culture.</p>
            <h3>john</h3>
            <span>traveler</span>
            <img src="images/pic-1.png" alt="">
         </div>
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Best guide ever. Joao was terrific. He knows every possible language and all the hot, not-famous spots</p>
            <h3>Caroline</h3>
            <span>traveler</span>
            <img src="images/pic-2.png" alt="">
         </div>
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>  Excellent experience.Something that would not have been possible without 
               the great João and his deep knowledge of Moroccan culture.
                See you soon✈️</p>
            <h3>Rogers stefan</h3>
            <span>traveler</span>
            <img src="images/pic-3.png" alt="">
         </div>
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>I had a wonderful guide whilst I was there and everything was so easy and stress free</p>
            <h3>Neelie</h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         </div>
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>our trip was so much more special and made as feel like we were home. I hope to be back one day!</p>
            <h3>Sunny</h3>
            <span>traveler</span>
            <img src="images/pic-5.png" alt="">
         </div>
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p> It was my first time in India and the experience couldn't be any better.</p>
            <h3>Xi-chang</h3>
            <span>traveler</span>
            <img src="images/pic-6.png" alt="">
         </div>
      </div>
   </div>
</section>
<!-- reviews section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</php>
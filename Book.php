<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>
   
   <link rel="stylesheet" href="CSS/book.css">
   


   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-paper-plane"></i>Easy Travel
        </a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="Accueil.php">home</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="about.php">about</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="packages.php">Package</a>
            <a data-aos="zoom-in-left" data-aos-delay="1150" href="#footer">Footer</a>
        </nav>

        <a data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form" class="btn">book now</a>

    </header>

<!-- header section ends -->

<div class="heading1" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->



















<!-- footer section ends -->

<section class="footer" id="footer">

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>WHY USE OUR TRAVEL ? </a>
                <p>Because with us you will find only the best travel offers for you. Our special travel deals search engine searches all the best worldwide travel sites and also local travel agencies. And offers you the best travel match that you are searching for. </p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/girls.codiing/" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <h3>quick links</h3>
                <a href="Accueil.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
                <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> gallery </a>
                <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> Book </a>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>contact info</h3>
                <p> <i class="fas fa-map"></i> Morocco</p>
                <p> <i class="fas fa-phone"></i> +212622847302 </p>
                <p> <i class="fas fa-envelope"></i> sn.girlscoding@gmail.com </p>
                <p> <i class="fas fa-clock"></i>24/7 Guide Service</p>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <h3>newsletter</h3>
                <p>Get Travel Updates</p>
                <div class="form">
                    <input type="email" name="" placeholder="enter your email" class="email" id="nou">
                    <input type="submit" value="subscribe" class="btn">
                </div>
            </div>

        </div>

    </section>
 
    <div class="credit">created by <span>BOUASSAB</span> |  © 2023-2024 </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
    </script>







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
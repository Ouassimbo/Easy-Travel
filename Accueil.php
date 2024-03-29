<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/service.css">
    <link rel="stylesheet" href="tabl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


    <script src="JS/script.js" defer></script>
</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-paper-plane"></i>Easy
            Travel
        </a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="#services">services</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="#about">about</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="#destination">Package</a>
            <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
            <a data-aos="zoom-in-left" data-aos-delay="1150" href="Book.php">Book</a>
        </nav>

        <a data-aos="zoom-in-left" data-aos-delay="1300" href="index.php" class="btn">log out</a>

    </header>
    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150">follow us</span>
            <h3 data-aos="fade-up" data-aos-delay="300">To Find Cheap Flights</h3>
            <p data-aos="fade-up" data-aos-delay="450">Explore the best flight deals for weekend travel <br>
                Follow us on Instagram to see our best flight deals</p>
            <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- booking form section starts  -->

    <section class="book-form" id="book-form">
        <div class="form">
            <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
                <span> &nbsp; &nbsp; &nbsp; Departure city :</span>
                <input type="" placeholder="place name" value="" style="color:white" id="depar">
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
                <span> &nbsp; &nbsp; &nbsp;Arrival city :</span>
                <input type="" placeholder="place name" value="" id="arrive">
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <span>&nbsp; &nbsp; &nbsp; when?</span>
                <input type="date" value="" id="dated">
            </div>
            <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="find now" class="btn" id="find">
</div>
        
    </section>
   
    <div id="tra" >

    </div>
 
    <?php
    /*include_once 'traitment.php';
    if (isset($_POST['find']))
    {
     $villea=$_POST['arrive'];
    $villed=$_POST['depar'];
    $dated=$_POST['dated'];
    $cur=Traitment::findnow($villed,$villea,$dated);
    $n=$cur->rowCount();
   if($n!=0){
    echo "<div style='background:#eee; margin: 66px; padding:20px; font-size:20px' data-aos='zoom-in' data-aos-delay='600' >";
    echo "<center><table >";
                echo "<tr >";
                echo "<th>Vdepart</th>";
                echo "<th>Ddepart</th>";
                echo "<th>Hdepart</th>";

                echo "<th>Varrivée</th>";
                echo "<th>Darrivée</th>";
                echo "<th>Harrivée</th>";

                echo "<th>prix </th>";
                echo "</tr>";
                while ($row = $cur->fetch()) {
                    echo "<tr>";
                    for ($i = 0; $i <7; $i++) {
                        echo "<td>$row[$i]</td>";
                    }
                    echo "</tr>";
                }
                $cur->closeCursor();
                echo "</table></center>";
                echo "</div>";
            }
    else{
                echo "PAS DE TRAJET !!";
        }
                        
                           
                          }*/
                         
                         ?>

    <section class="services" id="services">

        <h1 class="heading-title"> our services </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-out-down" data-aos-delay="300">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box" data-aos="zoom-out-down" data-aos-delay="450">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box" data-aos="zoom-out-down" data-aos-delay="600">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box" data-aos="zoom-out-down" data-aos-delay="750">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box" data-aos="zoom-out-down" data-aos-delay="900">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box" data-aos="zoom-out-down" data-aos-delay="1150">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>

        </div>

    </section>


    <section class="about" id="about">

        <div class="video-container" data-aos="fade-right" data-aos-delay="300">
            <video src="images/about-vid-2.mp4" muted autoplay loop class="video"></video>
            <div class="controls">
                <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
                <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
                <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
            </div>
        </div>

        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <h3>About Us</h3>
            <span>Deal Finders with a Passion for Travel</span>
            <p>Travelling is run by a group of people really passionate about travel — and we get pretty excited about
                finding great deals. Every day, we search over 20,000 routes to find only the best fares available on
                trips you want to take. And we’ve been doing this for more than 10 years, so we know a great deal when
                we see it!</p>
            <a href="about.php" class="btn1">read more</a>
        </div>

    </section>

    <section class="home-packages" id="destination">
        <h1 class="heading-title"> our packages </h1>
        <center><span style=" color: #61a5c2;
    font-size: 2.5rem;
    ">Check out Our Vacation Package Deals!</span></center>
        <br>
        <br>
        <br>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/punta-cana.jpg" alt="">
                </div>
                <div class="content">
                    <h3>punta-cana</h3>
                    <p>Take your family to the Marinarium and spend a fun filled day around excellent rides, snorkeling
                        and nursing the sharks.</p>
                    <a href="book.php" class="btn1">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/popeye-village.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Popeye village</h3>
                    <p>known as Sweethaven Village, is open to the public seven days a week and, apart from the film set
                        itself, has a number of family attractions for the visitor to experience.</p>
                    <a href="book.php" class="btn1">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/maldives.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Maldives</h3>
                    <p>Wake up to the rhythm of waves washing ashore in the Maldives. Your loved one is by your side.
                        It’s 14th February - a very special day indeed. You wonder if you made the right decision to
                        come to the Maldives for Valentine’s day.</p>
                    <a href="book.php" class="btn1">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"> <a href="packages.php" class="btn2">load more</a> </div>

    </section>

    <section class="gallery" id="gallery">

        <div class="heading">
            <h3 class="heading-title">our gallery</h3>
            <span style="color:#61a5c2">we record memories</span>
        </div>

        <div class="box-container">

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <img src="images/couple.jpg" alt="">
                <span>walk around </span>
                <h3>Maldives</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <img src="images/gallery-img-2.jpg" alt="">
                <span>travel spot</span>
                <h3>greenland</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <img src="images/journey.jpg" alt="">
                <span>traveling</span>
                <h3>Shot of the day</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <img src="images/gallery-img-4.jpg" alt="">
                <span>travel spot</span>
                <h3>thailand</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <img src="images/gallery-img-5.jpg" alt="">
                <span>travel spot</span>
                <h3>brazil</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <img src="images/ga1.jpg" alt="">
                <span>travel dreams</span>
                <h3>Couples</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <img src="images/gallery-img-7.jpg" alt="">
                <span>travel spot</span>
                <h3>iceland</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <img src="images/gallery-img-8.jpg" alt="">
                <span>travel spot</span>
                <h3>alaska</h3>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <img src="images/gallery-img-9.jpg" alt="">
                <span>travel spot</span>
                <h3>maldive</h3>
            </div>

        </div>

    </section>
    <center>
        <section class="home-offer">
            <div class="content">
                <h3 class="heading-title">YOU DESERVE A VACATION</h3>
                <p style="font-size:1.5rem">“DOMESTIC FLIGHTS, INTERNATIONAL FLIGHTS, FIRST AND BUSINESS CLASS FLIGHTS,
                    PARTNER PERKS BY FAR THE BEST SOLUTION OUT THERE.”</p>
                <a href="book.php" class="btn1">book now</a>
            </div>
        </section>
    </center>

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>WHY USE OUR TRAVEL ? </a>
                <p>Because with us you will find only the best travel offers for you. Our special travel deals search
                    engine searches all the best worldwide travel sites and also local travel agencies. And offers you
                    the best travel match that you are searching for.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <h3>quick links</h3>
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
                <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> gallery </a>
                <a href="Book.php" class="links"> <i class="fas fa-arrow-right"></i> Book </a>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>contact info</h3>
                <p> <i class="fas fa-map"></i> Morocco</p>
                <p> <i class="fas fa-phone"></i> +212681474112 </p>
                <p> <i class="fas fa-envelope"></i> Ouassimbouassa01@gmail.com </p>
                <p> <i class="fas fa-clock"></i>24/7 Guide Service</p>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <div class="form">
                    <input type="email" name="" placeholder="enter your email" class="email" id="">
                    <input type="submit" value="subscribe" class="btn">
                </div>
            </div>

        </div>

    </section>

    <div class="credit">created by <span>BOUASSAB</span> | © 2023-2024 </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
    </script>
    <script>
         /*
            $("#find").click(function(){
                $.POST("Accueil.php",{vd=$("#depar").val(),va=$("#arrive").val(),da=$("#dated").val()},function(data){
                $("#diva").html(data)
            })
            alert("hiho");
           
            })
            */
    </script>
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            $("#find").click(function(){
               let vd=$("#depar").val();
               let va=$("#arrive").val();
               var dat=$("#dated").val();
               
             $.ajax({
                 url:'traget.php',
                 type:'POST',
                 data:'vd='+vd+'&va='+va+'&dat='+dat
             }).done(function(traj){
             
                 $("#tra").html(traj);
                
             })
            })

        })


    </script>
</body>

</html>
<?php include('../connection/config.php'); ?>
<?php
session_start();

$userr = $_SESSION["username"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Bad Monkey Street Food</title>
  <meta name="title" content="Bad Monkey Street Food">
  <meta name="description" content="Bad Monkey Street Food">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../img/logo.PNG" type="image/PNG">

  <!-- 
    - google font link
  -->

  <!--Font awsome tool kit-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="../img/bal.jpg">
  <link rel="preload" as="image" href="../img/add.jpeg">
  <link rel="preload" as="image" href="../img/subm.png">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Bad Monkey</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar" id="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          <a href="https://maps.app.goo.gl/Yz6kPb7ZD3o8Tyd18?g_st=iw">N0. 12, Wariypola Sri Sumangala Mawatha, Kandy</a>
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Daily : 10.00 am to 11.00 pm</span>
      </div>

      <a href="tel:+94774708655" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+94 77 470 8655</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:badmonkeystreetfood@gmail.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">badmonkeystreetfood@gmail.com</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container" id="c-bar">

      <a href="../img/logo.PNG" class="logo">
        <img src="../img/logo.PNG" width="90" alt="Bad Monkey Street Food">
      </a>

      <p id="name-left">Bad Monkey Street Food</p>

      <nav class="navbar" data-navbar>

        <button class="close-btn" id="c2" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="../img/logo.PNG" width="160" height="50" alt="BadMonkey - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Menus</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#reviews" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Reviews</span>
            </a>
          </li>

          <li class="navbar-item" id="dont">
            <a href="../login/login.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Login page</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visit Us</p>

          <address class="body-4">
            N0. 12, Wariypola Sri Sumangala Mawatha,<br> Kandy
          </address>

          <p class="body-4 navbar-text">Open: 10.00 am - 11.00 pm</p>

          <a href="mailto:badmonkeystreetfood@gmail.com" class="body-4 sidebar-link">badmonkeystreetfood@gmail.com</a>

          <div class="separator"></div>

        </div>

      </nav>
      <!--Side icons on the top left-->
      <div class="icons">

        <!--<i class="fas fa-shopping-cart"></i>-->
        <a href="../user/user.php?user_name=<?php echo $userr; ?>" class="fa-solid fa-user"></a>
        <a href="../login/login.php" class="fa-solid fa-arrow-right-from-bracket"></a>
      </div>

      <!--Navigatin bar button-->
      <button class="nav-open-btn" id="btn1" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO Slider
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>
          <!--Slide one-->
          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="../img/bal.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal" id="smal-text-home">Tradational & Hygine</p>

            <h1 class="display-1 hero-title slider-reveal">
              For the love of <br>
              delicious food
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>

          </li>
          <!--Slide 2-->
          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="../img/add.jpeg" width="1880" height="950" alt="cover photo" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal" id="smal-text-home2">delightful experience</p>

            <h1 class="display-1 hero-title slider-reveal">
              Flavors Inspired by <br>
              the Seasons
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>

          </li>
          <!--slide 3-->
          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="../img/bal.jpg" width="1880" height="950" alt="cover pphoto" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal" id="smal-text-home3">amazing & delicious</p>

            <h1 class="display-1 hero-title slider-reveal">
              Where every flavor <br>
              tells a story
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="#menu" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Menu</span>

              <span class="text text-2" aria-hidden="true">View Our Menu</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

      </section>





      <!-- 
        - #SERVICE
      -->


      <section class="section service bg-black-10 text-center" aria-label="service" style="height: 100%;">
        <div class="container">

          <p class="section-subtitle label-2">Flavors For Royalty</p>

          <h2 class="headline-1 section-title">We Offer Top Notch</h2>

          <p class="section-text">
            Our roast panos are savory delights featuring succulent roasted meats, fresh vegetables, and flavorful spreads, all enveloped in soft, toasted bread. As for our burgers, they are crafted with premium beef, grilled to perfection, and adorned with a variety of toppings to create a mouthwatering experience. Each dish promises a symphony of flavors that will undoubtedly satisfy your taste buds.
          </p>

          <!-- category list  -->




          <ul class="grid-list">
            <li>
              <div class="service-card">

                <a href="#menu" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="../img/1.JPG" width="285" height="336" loading="lazy" alt="roast panos" class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Roast Panos</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#menu" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="../img/shawarma.jpeg" width="285" height="336" loading="lazy" alt="Shawarma" class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Shawarma</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#menu" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="../img/Drink.jpeg" width="285" height="336" loading="lazy" alt="Drinks" class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Drinks</a>
                  </h3>

                  <a href="#menu" class="btn-text hover-underline label-2">View Menu</a>

                </div>

              </div>
            </li>
          </ul>

          <img src="../img/design-logo-1.png" width="246" height="412" loading="lazy" alt="shape" class="shape shape-1 move-animm"><!--find a good 4to then remove one m in the end to animate shape-->
          <img src="../img/design-logo-3.png" width="343" height="345" loading="lazy" alt="shape" class="shape shape-2 move-anim">

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Our Culinary Journey</p>

            <h2 class="headline-1 section-title">Every Flavor Tells a Story</h2>

            <p class="section-text">
              Welcome to Bad Monkey Streat Food, where every dish tells a story and every order is a journey through the world of taste. Our story is a tapestry woven with passion, dedication, and a relentless pursuit of bringing exceptional flavors to your doorstep.
            </p>

            <div class="contact-label">Book Through Call</div>

            <a href="tel:+94761522887" class="body-1 contact-number hover-underline">+94 (76) 152 2887 </a>

            <a href="#menu" class="btn btn-primary">
              <span class="text text-1">Read More</span>

              <span class="text text-2" aria-hidden="true">Menu</span> <!--read more-->
            </a>

          </div>

          <figure class="about-banner">

            <img src="../img/4.JPG" width="570" height="570" loading="lazy" alt="about banner" class="w-100" data-parallax-item data-parallax-speed="1">

           

          </figure>

          <!--<img src="../img/11.JPG" width="197" height="194" loading="lazy" alt="" class="shape">-->

        </div>
      </section>





      <!-- 
        - #SPECIAL DISH
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="../img/2.JPG" style="border-radius: 20px;" width="940" height="900" loading="lazy" alt="special dish" class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <!--<img src="img/logo.PNG" width="28" height="41" loading="lazy" alt="badge" class="abs-img">-->

            <p class="section-subtitle label-2">Special Dish</p>

            <h2 class="headline-1 section-title">Roast panos</h2>

            <p class="section-text">
              Grilled minced beef,Grilled minced chicken,Grilled sausage,Avacado Slices ,Fried 2 Eggs,onion Slices,tomato Slices,cucumber Slices,cabbage Slices,spread of tomato paste, mayo and mango mustard paste & with cheese slices.
            </p>

            <div class="wrapper">
              <del class="del body-3">RS.1800.00</del>

              <span class="span body-1">RS.1600.00</span>
            </div>

            <a href="#menu" class="btn btn-primary">
              <span class="text text-1">View All Menu</span>

              <span class="text text-2" aria-hidden="true">View All Menu</span>
            </a>

          </div>
        </div>

        <!--<img src="img/long_baner.jpg" width="179" height="359" loading="lazy" alt="huhu" class="shape shape-1">

        <img src="img/long_baner.jpg" width="351" height="462" loading="lazy" alt="huh" class="shape shape-2">-->

      </section>





      <!-- 
        - #MENU
      -->

      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Foods Selection</p>

          <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

          <ul class="grid-list">
            <?php

            //display category from db
            $sql2 = "SELECT * FROM tbl_menu WHERE active='yes' AND featured='yes' ";
            $res2 = mysqli_query($con, $sql2);
            $count2 = mysqli_num_rows($res2);

            if ($count2 > 0) {
              //category aveilable
              while ($row2 = mysqli_fetch_assoc($res2)) {
                $id = $row2['id'];
                $title = $row2['title'];
                $description = $row2['description'];
                $price = $row2['price'];
                $image_name = $row2['image_name'];
            ?>

                <li>
                  <div class="menu-card hover:card">

                    <figure class="card-banner img-holder" style="width: 120px; height: 120px;">
                      <?php

                      if ($image_name == "") {
                        echo "<div class='error'>image not aveilable</div>";
                      } else {
                      ?>

                        <img src="../../add/images/food/<?php echo $image_name; ?>" width="100" height="100" loading="lazy" alt="Greek Salad" class="img-cover">
                      <?php

                      }

                      ?>

                    </figure>

                    <div>

                      <div class="title-wrapper">
                        <h3 class="title-3">
                          <a href="#" class="card-title"><?php echo $title; ?></a>
                        </h3>

                        <!-- <span class="badge label-1">Special</span> -->

                        <span class="span title-2">RS.<?php echo $price; ?></span>
                      </div>

                      <p class="card-text label-1">
                        <?php echo $description; ?>
                      </p><br>
                      <a href="../order/order.php?food_id=<?php echo $id; ?>&user_name=<?php echo $userr; ?>" class="btn btn-primary">Order Now</a>

                    </div>

                  </div>
                </li>





            <?php

              }
            } else {
              echo "<div class = 'error'>Food not available</div>";
            }





            ?>
          </ul>

          <p class="menu-text text-center">
            Daily from <span class="span">10:00 am</span> to <span class="span">11:00 pm</span>
          </p>

         
        </div>
      </section>





      <!-- 
        - #REviews
      -->


      <div>
        <section id="reviews" class="section testi text-center has-bg-image" style="background-size:cover; border-radius: 30px; background-image: url('../img/review.png')" aria-label="testimonials">
          <div class="container">

            
            <?php
            //query to get all reviews
            $revqu = "SELECT * FROM cus_rev LIMIT 2  ";
            $resul = mysqli_query($con, $revqu);

            if ($resul == true) {

              $count = mysqli_num_rows($resul);

              $sn = 1;

              if ($count > 0) {

                while ($rows = mysqli_fetch_assoc($resul)) {
                  //get data in database
                  $r_name = $rows['name'];
                  $reviews = $rows['review'];

                  //display value 

            ?>
                  <div class="quote">❝</div>
                  <p class="headline-2 testi-text" style="font-weight: 900;">
                    <?php echo $reviews ?>
                  </p>

                  <div class="wrapper">
                    <div class="separator"></div>
                    <div class="separator"></div>
                    <div class="separator"></div>
                  </div>

                  <div class="profile">
                    <!--<img src="../img/pf2.jpg" width="100" height="100" loading="lazy" alt="prof-4to" class="img">-->

                    <p class="label-2 profile-name" id="profile-name"><?php echo $r_name ?></p>
                  </div> <br>
                  <div class="quote">❞</div><br>
            <?php
                }
              }
            }

            ?>



          </div>


        </section>
      </div>




      <!-- 
        - #Rcontact

      -->
      <div style="position: relative; padding-top: 20px;">
        <section>
          <div class="container">

            <div class="form reservation-form bg-black-10">


              <div class="form-right text-center " style="margin-left: 400px;">

                <h2 class="headline-1 text-center">Contact Us</h2>

                <p class="contact-label">..................</p>

                <a href="tel:+94761522887" class="body-1 contact-number hover-underline">+94 76 152 2887<br></a>
                <a href="tel:+94775254256" class="body-1 contact-number hover-underline">+94 77 525 4256</a>



                <div class="separator"></div>

                <p class="contact-label">Location</p>

                <address class="body-4">
                  In front of St Sylvester Primary School entrance, <br>
                  Wariyapola Sri Sumangala mawatha , Kandy
                </address>

                <p class="contact-label"></p>

                <p class="body-4">

                </p>

                <p class="contact-label">Open</p>

                <p class="body-4">

                  10.00 am - 11.00pm
                </p>

              </div>

            </div>

          </div>
        </section>





        <!-- 
        - #FEATURES
      -->

        <section class="section features text-center" aria-label="features">
          <div class="container">

            <p class="section-subtitle label-2">Why Choose Us</p>

            <h2 class="headline-1 section-title">Our Strength</h2>

            <ul class="grid-list">

              <li class="feature-item">
                <div class="feature-card">
                  <!--icon BackGround color 1 (add box shadow later)-->
                  <div class="card-icon" style="background-color: #CACFD2;">
                    <img src="../img/food-hygiene.svg" width="100" height="80" loading="lazy" alt="icon">
                  </div>

                  <h3 class="title-2 card-title">Hygienic Food</h3>

                  <p class="label-1 card-text">Indulge in a culinary experience that prioritizes your well-being. At our restaurant, we take pride in our commitment to hygienic food practices. From the kitchen to your plate, every step is meticulously executed to ensure the highest standards of cleanliness.</p>

                </div>
              </li>

              <li class="feature-item">
                <div class="feature-card">
                  <!--icon BackGround color 2-->
                  <div class="card-icon" style="background-color: #CACFD2;">
                    <img src="../img/fresh-environment.png" width="100" height="80" loading="lazy" alt="icon">
                  </div>

                  <h3 class="title-2 card-title">Fresh Environment</h3>

                  <p class="label-1 card-text">Step into a refreshing ambiance that elevates your dining experience. Our restaurant is designed to provide a fresh and inviting environment.</p>

                </div>
              </li>

              <li class="feature-item">
                <div class="feature-card">
                  <!--icon BackGround color 3-->
                  <div class="card-icon" style="background-color: #CACFD2;">
                    <img src="../img/skil-chef.png" width="100" height="80" loading="lazy" alt="icon">
                  </div>

                  <h3 class="title-2 card-title">Skilled Chefs</h3>

                  <p class="label-1 card-text">With passion and expertise, our culinary maestros curate a menu that tantalizes your taste buds. Each dish is a masterpiece, showcasing the creativity and dedication of our chefs. </p>

                </div>
              </li>

              <li class="feature-item">
                <div class="feature-card">
                  <!--icon BackGround color 4-->
                  <div class="card-icon" style="background-color: #CACFD2;">
                    <img src="../img/party.png" width="100" height="80" loading="lazy" alt="icon">
                  </div>

                  <h3 class="title-2 card-title">Event & Party</h3>

                  <p class="label-1 card-text">Celebrate your special moments with us.Whether it's a milestone celebration, corporate gathering, or intimate party with friends, our dedicated team is here to make your event memorable. </p>

                </div>
              </li>

            </ul>
            <!-- Shapes TODO
          <img src="./assets/images/shape-7.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="./assets/images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">-->

          </div>
        </section>
      </div>





      <!-- 
        - #EVENT
      -->






      <!-- 
    - #FOOTER
  -->

      <footer class="footer section has-bg-image text-center">
        <div class="container">

          <div class="footer-top grid-list">

            <div class="footer-brand has-before has-after">

              <a href="#" class="logo">
                <img src="../img/logo.PNG" width="160" height="50" loading="lazy" alt="badMonkey home">
              </a>

              <address class="body-4">
                In front of St Sylvester Primary School entrance,
                Wariyapola Sri Sumangala mawatha , Kandy
              </address>

              <a href="mailto:erangahansaja222@gmail.com" class="body-4 contact-link">badmonkeyg@streetfood.com</a>

              <a href="tel:+94761522887" class="body-4 contact-link"> +94 76 152 2887</a>

              <p class="body-4">
                Open : 10:00 am - 11:00 pm
              </p>

              <div class="wrapper">
                <div class="separator"></div>
                <div class="separator"></div>
                <div class="separator"></div>
              </div>

              <p class="title-1">Get News & Offers</p>

              <p class="label-1">
                Subscribe us <span class="span">.</span>
              </p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
              </svg>



            </div>






            <ul class="footer-list">

              <li>
                <a href="#" class="label-2 footer-link hover-underline">Home</a>
              </li>

              <li>
                <a href="#menu" class="label-2 footer-link hover-underline">Menus</a>
              </li>

              <li>
                <a href="#about" class="label-2 footer-link hover-underline">About Us</a>
              </li>

              <li>
                <a href="../todo/index.html" class="label-2 footer-link hover-underline">Our Chefs</a>
              </li>

              <li>
                <a href="tel:+94761522887" class="label-2 footer-link hover-underline">Contact</a>
              </li>

            </ul>







            <ul class="footer-list">

              <li>
                <a href="https://www.facebook.com/profile.php?id=100090658017776&mibextid=LQQJ4d" class="label-2 footer-link hover-underline">Facebook</a>
              </li>

              <li>
                <a href="https://www.instagram.com/bad_monkeystreetfood?igsh=OGQ5ZDc2ODk2ZA==" class="label-2 footer-link hover-underline">Instagram</a>
              </li>



              <li>
                <a href="https://maps.app.goo.gl/Yz6kPb7ZD3o8Tyd18?g_st=iw" class="label-2 footer-link hover-underline">Google Map</a>
              </li>

            </ul>

          </div>

          <div class="footer-bottom">

            <p class="copyright">
              &copy; 2023. All Rights Reserved.
            </p>

          </div>

        </div>
      </footer>


      <!-- 
    - #BACK TO TOP
  -->

      <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
      </a>



      <!-- 
    - custom js link
  -->
      <script src="script.js"></script>


      <!-- 
    - ionicon link
  -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
<?php
  session_start();
  // if(empty($_SESSION['email'])){
  //   header('location:index.php');
  // }
  // if(!empty($_SESSION['email'])){
  //   $email = $_SESSION['email'];
  // }
?>



<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/cssall.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- 
    - favicon
      -->
      <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
      rel="stylesheet">

    <!-- 
      - preload images
    -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png" media="min-width(768px)">
    <link rel="preload" as="image" href="./assets/images/hero-banner-bg.png" media="min-width(768px)">
    <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">

  </head>


  <body style="background-color: lightblue;">

    <style>
      .links li:hover{
        background: lightgrey;
        transition: all .5s ease;
      }
    </style>
    <aside class="sidebar">
      <div class="logo">
        <img src="images/unnamed.jpg" alt="logo">
        <h2 style="font-size:larger;">iKota</h2>
      </div>
      <ul class="links">
        <h4>Profile</h4>
        <li>
          <span class="material-symbols-outlined">person</span>
          <a id="mail" methodd="POST" href="user-profile.php">Siphamandla Ngcepe<br><span id="ema">sphashepherd@gmail.com</span></a>
        </li>
        <!-- <li>
          <span class="material-symbols-outlined">show_chart</span>
          <a href="#">Revenue</a>
        </li> -->
        <!-- <li>
          <span class="material-symbols-outlined">flag</span>
          <a href="#">Reports</a>
        </li> -->
        <hr>
        <h4>Advanced</h4>
        <li>
          <span class="material-symbols-outlined">person</span>
          <a href="#">Wallet</a>
        </li>
        <li>
          <span class="material-symbols-outlined">group</span>
          <a href="#">Order History </a>
        </li>
        <li>
          <span class="material-symbols-outlined">ambient_screen</span>
          <a href="#">Favorites</a>
        </li>
        <!-- <li>
          <span class="material-symbols-outlined">pacemaker</span>
          <a href="#">Theme Maker</a>
        </li>
        <li>
          <span class="material-symbols-outlined">monitoring</span>
          <a href="#">Analytic</a>
        </li> -->
        <hr>
        <h4>Account</h4>
        <li>
          <span class="material-symbols-outlined">settings</span>
          <a href="#">Settings</a>
        </li>
        <li>
          <span class="material-symbols-outlined">mail</span>
          <a href="#">Messages</a>
        </li>
        <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">FAQ's</a>
        </li>
        <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">Terms and Conditions</a>
        </li>
        <hr>
        <li class="logout-link">
          <span class="material-symbols-outlined">logout</span>
          <a href="index.html">Sign Out</a>
        </li>
      </ul>
    </aside>

    <br>
    
    <section style="position: static;margin-left: 140px;margin-right: 35px;" class="section section-divider gray about" id="about">
        <div class="container">

          <div class="about-banner">
            <img src="./assets/images/about-banner.png" width="509" height="459" loading="lazy" alt="Burger with Drinks"
              class="w-100 about-img">

            <!-- <img src="./assets/images/sale-shape-red.png" width="216" height="226" alt="get up to 50% off now"
              class="abs-img scale-up-anim"> -->
          </div>

          <div class="about-content">

            <h2 class="h2 section-title">
              Caferio, Burgers, and Best Pizzas
              <span class="span">in Town!</span>
            </h2>

            <p class="section-text">
              The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during
              the Jurchen
              invasion of the 1120s, while it is also known that many restaurants were run by families.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Delicious & Healthy Foods</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Spacific Family And Kids Zone</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Music & Other Facilities</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Fastest Food Home Delivery</span>
              </li>

            </ul>

            <button class="btn btn-hover">Order Now</button>

          </div>

        </div>
      </section>

    <br>


    <section class="section food-menu" id="food-menu" style="margin-left: 140px;margin-right: 35px;">
        <div class="container">

          <p class="section-subtitle">Popular Dishes</p>

          <h2 class="h2 section-title">
            Our Delicious <span class="span">Foods</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>

          <ul class="fiter-list">

            <li>
              <button class="filter-btn  active">All</button>
            </li>

            <li>
              <button class="filter-btn">Pizza</button>
            </li>

            <li>
              <button class="filter-btn">Burger</button>
            </li>

            <li>
              <button class="filter-btn">Drinks</button>
            </li>

            <li>
              <button class="filter-btn">Sandwich</button>
            </li>

          </ul>

          <ul class="food-menu-list">

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-1.png" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Chicken</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Fried Chicken Unlimited</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price">R149.00</data>

                  <del class="del" value="69.00">R169.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-2.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Noddles</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">R129.00</data>

                  <del class="del">R139.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-3.png" width="300" height="300" loading="lazy"
                    alt="White Castle Pizzas" class="w-100">

                  <div class="badge">-25%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Pizzas</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">White Castle Pizzas</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">R149.00</data>

                  <del class="del">R169.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-4.png" width="300" height="300" loading="lazy"
                    alt="Bell Burrito Supreme" class="w-100">

                  <div class="badge">-20%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Burrito</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Bell Burrito Supreme</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="59.00 ">R159.00</data>

                  <del class="del">R169.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-5.png" width="300" height="300" loading="lazy"
                    alt="Kung Pao Chicken BBQ" class="w-100">

                  <div class="badge">-5%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Nuggets</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Kung Pao Chicken BBQ</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">R149.00</data>

                  <del class="del">R169.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-6.png" width="300" height="300" loading="lazy"
                    alt="Wendy's Chicken" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Chicken</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Wendy's Chicken</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">R149.00</data>

                  <del class="del">R169.00</del>

                </div>

              </div>
            </li>

          </ul>


        </div>
    </section>

    <br>

    <br>
    <!-- <div class="cont" style="background-color: rgb(211, 211, 211, 0.5); width: 1100px;margin-left: 140px;margin-top: 50px;text-align: center;">
      <section id="secs">
        <h1>Sec1</h1>
      </section>

      <section id="secs">
        <h1>Sec2</h1>
      </section>

      <br>

      <section id="secs">
        <h1>Sec3</h1>
      </section>

      <section id="secs">
        <h1>Sec4</h1>
      </section>
    </div> -->
    <br>
    <br>

    <style>
      #secs{
        display: inline-block;
        background-color: #4c4c4c;
        height: 250px;
        width: 420px ;
        margin: 15px;
      }
    </style>
    



    <style>
      /* Importing Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    color: black;
}

body {
    height: 100vh;
    width: 100%;
    background-image: url("images/hero-bg.jpg");
    background-position: center;
    background-size: cover;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100px;
    height: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(17px);
    --webkit-backdrop-filter: blur(17px);
    border-right: 1px solid rgba(255, 255, 255, 0.7);
    transition: width 0.3s ease;
}

.sidebar:hover {
    width: 320px;
}

.sidebar .logo {
    color: #000;
    display: flex;
    align-items: center;
    padding: 25px 10px 15px;
}

.logo img {
    width: 43px;
    border-radius: 50%;
}

.logo h2 {
    font-size: 1.15rem;
    font-weight: 600;
    margin-left: 15px;
    display: none;
}

.sidebar:hover .logo h2 {
    display: block;
}

.sidebar .links {
    list-style: none;
    margin-top: 20px;
    overflow-y: auto;
    scrollbar-width: none;
    height: calc(100% - 140px);
}

.sidebar .links::-webkit-scrollbar {
    display: none;
}

.links li {
    display: flex;
    border-radius: 4px;
    align-items: center;
}

.links li:hover {
    cursor: pointer;
    background-color: #185275;
}

.links h4 {
  color: black;
    font-weight: 500;
    display: none;
    margin-bottom: 10px;
}

.sidebar:hover .links h4 {
    display: block;
}

.links hr {
    margin: 10px 8px;
    border: 1px solid #4c4c4c;
}

/* .sidebar:hover .links hr {
    border-color: transparent;
} */

.links li span {
    padding: 12px 10px;
}

.links li a {
    padding: 10px;
    color: black;
    display: none;
    font-weight: 500;
    white-space: nowrap;
    text-decoration: none;
}

.sidebar:hover .links li a {
    display: block;
}

.links .logout-link {
    margin-top: 20px;
}

      #ema{
        text-transform: lowercase;
        font-weight: lighter;
        font-size: smaller;
        margin-left: -10px;
        color: gray;
      }
    </style>
   
    
  </body>
</html>

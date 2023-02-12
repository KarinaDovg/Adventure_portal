<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="css/style.css">

  <title>Adventure Time</title>
</head>
<body>

  <header class="header">
    
    <div class="header-bg">
    </div>
    <div class="container">
      <div class="header__inner">
        <a class="header__logo"><img src="./img/Vector.svg" alt="logo1"></a>
       
        <nav class="header__nav">
          <ul class="nav__list">
            <li class="nav__item"><a class="nav__link" href="#">Search Tour</a></li>
            <li class="nav__item"><a id="nav_link_plan" class="nav__link" href="#!">Plan Your Trip</a></li>
            <li class="nav__item"><a id="nav_link_dest" class="nav__link" href="#!">Destinations</a></li>
            <li class="nav__item"><a id="nav_link_stories" class="nav__link" href="#!">Travel Stories</a></li>
            <li class="nav__item"><a id="nav__link" class="nav__link" href="#!">Account</a></li>
            <li class="nav__item"><a class="nav__link" href="#!">Social Media</a></li>
          </ul>
        </nav> 
          <?php
            if($_COOKIE['user'] == ''){
              ?>
                <div class="header__button">
                  <button id="button__login" class="button__login">Login</button>
                </div>
              <?php
            } else {
              ?>
                <div class="header__login_in">
                  <p>User <?=$_COOKIE['user']?>, hello!<br> <a class="button__login_in" href="php/exit.php">Exit</a></p>
                </div>
              <?php
            }
          ?>
        <div class="header__header__burger">
          <div class="header__burger">
          <span></span>
          </div>
        </div>
      </div>
      <div id="login" class="login">
        <div id="login_bg" class="login_bg"></div>
        <form action="./php/auth.php" method="post" id="login_in" class="login__in">
          <div class="container_login_in">
            <h1>Log in to your account</h1>
            <span class="login_email" >E-mail</span>
            <input class="input_email" type="text" name="email">
            <span class="login_email" >Password</span>
            <input class="input_email" type="password" name="password">
            <button class="login_sign">Sign In</button>
            <a class="login_forgot" href="#">Forgot Your Password?</a>
            <div class="login_account">Don’t have an account? <a id="login_register" class="login_register" href="#">Register</a></div>
          </div>
        </form>
        <form action="./php/check.php" method="post" id="login_create" class="login_create">
          <div class="container_login_in">
            <h1>Create account</h1>
            <span class="login_email" >E-mail</span>
            <input class="input_email" type="text" name="email_create">
            <span class="login_email" >Password</span>
            <input class="input_email" type="password" name="password_create">
            <button id="login_sign" class="login_sign">Sign Up</button>
            <div class="login_account">Already have an account? <a id="login_logIn" class="login_register" href="#">Log In</a></div>
          </div>
        </form>
      </div>
    </div>

  
    <div class="intro">
      <div class="container__intro">
        <div class="intro__title">Explore the beauty of the World</div>
        <h6 class="into__subtitle">Receive personalized recommendations for countries, hotels, activities and more</h6>
        <form class="subscribe" action="/php/tours.php" method="post">
          <input class="subscribe__input" type="text" name="sub" placeholder="Which country do you want to visit?">
          <div class="intro_btn">
            <button id="subscribe__btn" class="subscribe__btn">Search Tour</button>
          </div>
        </form>
      </div>
    </div>
  </header>



<section id="section" class="section">
  <div class="container__steps">
    <h2 class="common__title">3 STEPS TO THE PERFECT TRIP</h2>
    <div class="steps__logo">
      <div class="steps__item">
        <a class="steps__link" href="#"><img class="steps__icon" src="img/icons/1.png" alt="icon1"></a>
        <div class="steps__text">Tell us what you want to do</div>
      </div>
      <div class="steps__item">
        <a class="steps__link" href="#"><img class="steps__icon" src="img/icons/2.png" alt="icon2"></a>
        <div class="steps__text">Share us preferable dates </div>
      </div>
      <div class="steps__item">
        <a class="steps__link" href="#"><img class="steps__icon" src="img/icons/3.png" alt="icon3"></a>
        <div class="steps__text">We will give you recommendations</div>
      </div>
    </div>
  </div>

</section>


<section id="section_dest" class="section_dest">
  <h2 class="common__title">popular destinations</h2>
    <div class="container_dest">
      <div class="slider-line">
        <div id="slider_img1" class="slider_img1"><img src="/img/destinations/1.png" alt="img_Spain"></div>
        <div id="slider_img2" class="slider_img2"><img src="/img/destinations/2.png" alt="img_Japan"></div>
        <div id="slider_img3" class="slider_img3"><img src="/img/destinations/3.png" alt="img_USA"></div>
      </div>
    </div>
    <div class="tochki_dest">
      <div class="element_tochka" id="btn1"></div>
      <div class="element_tochka active" id="btn2"></div>
      <div class="element_tochka" id="btn3"></div>
    </div>
    <div class="dest_btn">
      <button class="subscribe__btn__find" type="submit">&#8594; Find More</button>
    </div>
</section>


<section id="section_stories" class="section">
    <h2 class="common__title">travel stories</h2>
    <div class="fon__lodka">
      <div class="fon__nav"> 
        <div class="container">
          <div class="fon__navigate__block"> 
            <img class="fon__nav__img" src="img/fon_nav/1.jpg" alt="block1">
            <div class="fon__nav__words">
              <h3 class="fon__nav__title">10 Photos of Attractive Thailand</h3>
              <div class="fon__nav__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...<br><a class="nav_read" href="#!">Read More</a></div>
          </div>
          </div>

          <div class="fon__navigate__block"> 
            <img class="fon__nav__img" src="img/fon_nav/2.jpg" alt="block2">
            <div class="fon__nav__words">
              <h3 class="fon__nav__title">Canyonlands National Park, Utah</h3>
              <div class="fon__nav__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...<br><a class="nav_read" href="#!">Read More</a></div> 
            </div>
          </div>

          <div class="fon__navigate__block"> 
            <img class="fon__nav__img" src="img/fon_nav/3.jpg" alt="block3">
            <div class="fon__nav__words">
              <h3 class="fon__nav__title">I left my heart in the Mountains!</h3>
              <div class="fon__nav__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...<br><a class="nav_read" href="#!">Read More</a></div> 
            </div>
          </div>

          <div class="fon__navigate__block"> 
            <img class="fon__nav__img" src="img/fon_nav/4.jpg" alt="block4">
            <div class="fon__nav__words">
              <h3 class="fon__nav__title">The Longest journey in my life!</h3>
              <div class="fon__nav__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit...<br><a class="nav_read" href="#!">Read More</a></div> 
            </div>
          </div>
          <div class="travel_btn">
            <button class="subscribe__btn__see" type="submit">&#8594; See More</button>
          </div>  
        </div>
          <div class="footer">
            <div class="copyright">All Rights Reserved © Adventure Time</div>
            <div class="footer__logo">
              <a class="footer__logo__item"><img src="./img/inst.png" alt="instagram"></a>
              <a class="footer__logo__item"><img src="./img/you.png" alt="youtube"></a>
              <a class="footer__logo__item"><img src="./img/twi2.png" alt="twitter"></a>
            </div>
          </div>
      </div>
        
    </div>
 
</section>

  <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  </script>
  <script src="js/app.js"></script>

</body>
</html>

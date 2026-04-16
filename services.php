<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <link rel="stylesheet" href="services.css?v=1">
  <link rel="icon" href="data:,">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>


  <header class="header">
    <nav>
       <div class="nav-right_service">
           
  <?php if (isset($_SESSION['user_id'])) { ?>

            <span class="welcome">
                Welcome <?php echo $_SESSION['user_name']; ?> 👋
            </span>

            <a href="logout.php" class="logout-btn">Logout</a>

        <?php } else { ?>

            <a href="login.html" class="nav-btn">Login</a>
            <a href="signup.html" class="nav-btn signup">Sign Up</a>

        <?php } ?>
        </div>

      <div class="navbar">
        <img class="servixo_logo" src="Servixo_logo.png">




        <div class="search_box">

          <input class="search_engine" type="text" placeholder="Search services......."><span>
            <i class="fa-solid fa-magnifying-glass icon "></i>
          </span>
        </div>

         <a  href="home.php" class="home anchor">Home</a>
            <a href="services.php" class="service anchor">Services</a>
            <a href="about.php" class="aboutUs anchor">About Us</a>
            <a href="my_bookings.php" class="myBookinh anchor">My Bookings</a>
            

           
            <!-- <div class="nav_btn">
            <button class="login"><a href="login.html">Login </a></button>
            <button class="sign_up"> <a href="signup.html">Sign Up </a></button>

            </div> -->


      </div>
    </nav>
  </header>

  <section class="hero_section">

    <div class="hero_title">
      <h5>
        <a href="home.php">Home ></a>
        Services
      </h5>
      <h1>Premium Home Services, <br> Right at Your Doorstep</h1>
      <p>From expert repairs to professional cleaning, <br> find Dehradun's most trusted specialist <br> for every task
        in one place.</p>
    </div>
    <div class="hero_imageDiv">
      <img class="hero_img" src="serviceHero_img.jpeg" alt="service">
    </div>

  </section>


  <section class="all-services-component">
    <div class="categories-grid">

      <button class="category-card active" value="all">
        <div class="allOption"><i class="fa-solid fa-border-all"></i></div><span>All</span>
      </button>
      <button class="category-card " value="plumber">
        <div class="icon-wrapper blue"><i class="fas fa-tint"></i></div>
        <span>Plumber</span>
      </button>

      <button class="category-card " value="electrician">
        <div class="icon-wrapper yellow"><i class="fas fa-bolt"></i></div>
        <span>Electrician</span>
      </button>

      <button class="category-card " value="tutor">
        <div class="icon-wrapper purple"><i class="fas fa-book-open"></i></div>
        <span>Tutor</span>
      </button>

      <button class="category-card" value="cleaner">
        <div class="icon-wrapper green"><i class="fas fa-broom"></i></div>
        <span>Cleaner</span>
      </button>

      <button class="category-card" value="painter">
        <div class="icon-wrapper pink"><i class="fas fa-paint-roller"></i></div>
        <span>Painter</span>
      </button>

      <button class="category-card" value="carpenter">
        <div class="icon-wrapper orange"><i class="fas fa-hammer"></i></div>
        <span>Carpenter</span>
      </button>
  </section>



  <section class="popular_services-section">



    <div class="popular_services-container">


      <div class="images-services plumber">
        <img src="PlumberFolder/Plumber1.jpg" alt="plumber">
        <h3>Ramesh Plumbing</h3>
        <p>Plumbing Services</p>
        <p><i class="fa-solid fa-star"></i>4.5(120)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=plumber&provider=Ramesh" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services painter">
        <img src="PainterFolder/Painter5.jpg" alt="cleaning">
        <h3>Tom Holland</h3>
        <p>Painter</p>
        <p><i class="fa-solid fa-star"></i>4.6(220)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
        <a href="booking.php?service=painter&provider=Tom Holland" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services plumber">
        <img src="PlumberFolder/Plumber2.jpg" alt="plumber">
        <h3>Nancy Plumbing</h3>
        <p>Plumbing Services</p>
        <p><i class="fa-solid fa-star"></i>4.7(420)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=plumber&provider=Nancy" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services plumber">
        <img src="PlumberFolder/Plumber3.jpg" alt="plumber">
        <h3>Alex Plumbing</h3>
        <p>Plumbing Services</p>
        <p><i class="fa-solid fa-star"></i>4.4(140)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=plumber&provider=Alex" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services plumber">
        <img src="PlumberFolder/Plumber4.jpg" alt="plumber">
        <h3>John Plumbing</h3>
        <p>Plumbing Services</p>
        <p><i class="fa-solid fa-star"></i>4.6(165)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=plumber&provider=John" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services painter">
        <img src="PainterFolder/Painter3.jpg" alt="cleaning">
        <h3>Peter Parker</h3>
        <p>Painter</p>
        <p><i class="fa-solid fa-star"></i>4.8(500)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=painter&provider=Peter" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services plumber">
        <img src="PlumberFolder/Plumber5.jpg" alt="plumber">
        <h3>Tappu Plumbing</h3>
        <p>Plumbing Services</p>
        <p><i class="fa-solid fa-star"></i>4.7(335)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
        <a href="booking.php?service=plumber&provider=Tappu" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services electrician">
        <img src="ElectricianFolder/Electrician1.jpg" alt="electrician">
        <h3>Sameer Electrician</h3>
        <p>Electrical Services</p>
        <p><i class="fa-solid fa-star"></i>4.3(100)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
        <a href="booking.php?service=electrician&provider=Sameer" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services electrician">
        <img src="ElectricianFolder/Electrician2.jpg" alt="electrician">
        <h3>Johny Electrician</h3>
        <p>Electrical Services</p>
        <p><i class="fa-solid fa-star"></i>4.3(120)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
        <a href="booking.php?service=electrician&provider=Johny" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services electrician">
        <img src="ElectricianFolder/Electrician3.jpg" alt="electrician">
        <h3>Mayank Electrician</h3>
        <p>Electrical Services</p>
        <p><i class="fa-solid fa-star"></i>4.5(230)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=electrician&provider=Mayank" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services electrician">
        <img src="ElectricianFolder/Electrician4.jpg" alt="electrician">
        <h3>Sam Electrician</h3>
        <p>Electrical Services</p>
        <p><i class="fa-solid fa-star"></i>4.2(90)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=electrician&provider=Sam" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services painter">
        <img src="PainterFolder/Painter3.jpg" alt="cleaning">
        <h3>Hulk</h3>
        <p>Painter</p>
        <p><i class="fa-solid fa-star"></i>4.7(320)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=painter&provider=Hulk" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services electrician" >
        <img src="ElectricianFolder/Electrician5.jpg" alt="electrician">
        <h3>Anand Electrician</h3>
        <p>Electrical Services</p>
        <p><i class="fa-solid fa-star"></i>4.6(306)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=electrician&provider=Anand" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services tutor">
        <img src="TutorFolder/Tutor1.jpg" alt="tutuion">
        <h3>Sakshi Tuitions</h3>
        <p>Home Tutor</p>
        <p><i class="fa-solid fa-star"></i>4.2(90)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=tutor&provider=Sakshi" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services tutor">
        <img src="TutorFolder/Tutor2.jpg" alt="tutuion">
        <h3>Anjali Tuitions</h3>
        <p>Home Tutor</p>
        <p><i class="fa-solid fa-star"></i>4.4(190)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
        <a href="booking.php?service=tutor&provider=Anjali" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services tutor">
        <img src="TutorFolder/Tutor3.jpg" alt="tutuion">
        <h3>Ammy Tuitions</h3>
        <p>Home Tutor</p>
        <p><i class="fa-solid fa-star"></i>4.5(203)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=tutor&provider=Ammy" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services tutor">
        <img src="TutorFolder/Tutor4.jpg" alt="tutuion">
        <h3>Anshul Tuitions</h3>
        <p>Home Tutor</p>
        <p><i class="fa-solid fa-star"></i>4.8(290)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=tutor&provider=Anshul" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services tutor">
        <img src="TutorFolder/Tutor5.jpg" alt="tutuion">
        <h3>Priya Tuitions</h3>
        <p>Home Tutor</p>
        <p><i class="fa-solid fa-star"></i>4.4(120)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=tutor&provider=Priya" class="viewProfile">
  Book Now
</a>
      </div>



      <div class="images-services carpenter">
        <img src="CarpenterFolder/Carpenter1.jpg" alt="carpenter">
        <h3>Aman Carpenter</h3>
        <p>Capentary Services</p>
        <p><i class="fa-solid fa-star"></i>4.2(85)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=carpenter&provider=Aman" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services carpenter">
        <img src="CarpenterFolder/Carpenter2.jpg" alt="carpenter">
        <h3>Leanord Carpenter</h3>
        <p>Capentary Services</p>
        <p><i class="fa-solid fa-star"></i>4.4(185)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=carpenter&provider=Leanord" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services carpenter">
        <img src="CarpenterFolder/Carpenter3.jpg" alt="carpenter">
        <h3>Hommy Carpenter</h3>
        <p>Capentary Services</p>
        <p><i class="fa-solid fa-star"></i>4.5(115)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=carpenter&provider=Hommy" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services painter">
        <img src="PainterFolder/Painter2.jpg" alt="cleaning">
        <h3>Wanda Joe</h3>
        <p>Painter</p>
        <p><i class="fa-solid fa-star"></i>4.8(520)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=painter&provider=Wanda" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services carpenter ">
        <img src="CarpenterFolder/Carpenter4.jpg" alt="carpenter">
        <h3>Rajesh Carpenter</h3>
        <p>Capentary Services</p>
        <p><i class="fa-solid fa-star"></i>4.6(285)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=carpenter&provider=Rajesh" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services carpenter">
        <img src="CarpenterFolder/Carpenter5.jpg" alt="carpenter">
        <h3>Mike Carpenter</h3>
        <p>Capentary Services</p>
        <p><i class="fa-solid fa-star"></i>4.5(199)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=carpenter&provider=Mike" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services cleaning">
        <img src="CleanerFolder/Cleaner1.jpg" alt="cleaning">
        <h3>Cleaing Home Services</h3>
        <p>Cleaning Services</p>
        <p><i class="fa-solid fa-star"></i>4.6(220)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=cleaner&provider=CleanHome" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services cleaning">
        <img src="CleanerFolder/Cleaner2.jpg" alt="cleaning">
        <h3>El Home Services</h3>
        <p>Cleaning Services</p>
        <p><i class="fa-solid fa-star"></i>4.6(210)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=cleaner&provider=CleanHome" class="viewProfile">
  Book Now
</a>
      </div>




      <div class="images-services cleaning">
        <img src="CleanerFolder/Cleaner3.jpg" alt="cleaning">
        <h3>Cleaing Services</h3>
        <p>Cleaning Services</p>
        <p><i class="fa-solid fa-star"></i>4.2(130)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
         <a href="booking.php?service=cleaner&provider=CleanHome" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services cleaning">
        <img src="CleanerFolder/Cleaner4.jpg" alt="cleaning">
        <h3>Cleaing Services</h3>
        <p>Cleaning Services</p>
        <p><i class="fa-solid fa-star"></i>4.5(200)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
        <a href="booking.php?service=cleaner&provider=CleanHome" class="viewProfile">
  Book Now
</a>
      </div>

      <div class="images-services painter">
        <img src="PainterFolder/Painter1.jpg" alt="cleaning">
        <h3>Sheldon</h3>
        <p>Painter</p>
        <p><i class="fa-solid fa-star"></i>4.7(320)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
        <a href="booking.php?service=painter&provider=Sheldon" class="viewProfile">
  Book Now
</a>
      </div>


      <div class="images-services cleaning">
        <img src="CleanerFolder/Cleaner5.jpg" alt="cleaning">
        <h3>Cleaing Home Services </h3>
        <p>Cleaning Services</p>
        <p><i class="fa-solid fa-star"></i>4.7(320)</p>
        <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
        <a href="booking.php?service=cleaner&provider=CleanHome" class="viewProfile">
  Book Now
</a>
      </div>


    </div>

  </section>


  <footer class="main-footer">
    <div class="footer-container">

      <div class="footer-col branding">
        <div class="footer-logo">
          <img src="Servixo_logo.png" alt="Servixo Logo">

        </div>
        <p>Find trusted services near you.</p>
        <p class="made-with">Made with ❤️ in Dehradun</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>

      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="services.php">Services</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="#">How it Works</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>For Professionals</h4>
        <ul>
          <li><a href="#">Become a Partner</a></li>
          <li><a href="#">Partner Login</a></li>
          <li><a href="#">Resources</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Refund Policy</a></li>
          <li><a href="#">Help Center</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Contact</h4>
        <ul class="contact-info">
          <li>📧 hello@servixo.com</li>
          <li>📞 +91 98706 XXXXX</li>
          <li>📍 Dehradun, Uttarakhand</li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© 2026 Servixo. All rights reserved.</p>
      <p>*All names and services shown are for demo purposes only.*</p>

      <p>Images form Pexels and Unsplash.</p>

    </div>
  </footer>





  <script src="service.js"></script>
</body>

</html>
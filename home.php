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
    <title>Document</title>
    <link rel="stylesheet" href="home.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header class="header">
        <nav>

         <div class="nav-right">
           
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
        <!-- <hr> -->



 
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
            

<!--            
            <div class="nav_btn">
            <button class="login"><a href="login.html">Login </a></button>
            <button class="sign_up"> <a href="signup.html">Sign Up </a></button>

            </div> -->
         

        </div>
        </nav>
    </header>
 
    <section class="hero-container">
  
  <div class="hero-text">
    <!-- <span class="tagline">Trusted. Reliable. Local.</span> -->
     <button class="tagline">Trusted. Reliable. Local.</button>
    <h1 class="hero-title">Find Trusted <br><span>Services</span> <br>in Dehradun</h1>
    <p class="hero-description">From home repairs to personal care, book trusted <br> professionals near you.</p>
    
    <div class="hero-btns">
      <button class="btn-primary"> <a href="services.php">Explore Services ></a></button>
      <button class="btn-secondary">How it works <span id="arrowIcon">▶</span></button>
      
    </div>
  </div>

  <div class="hero-image-wrapper">
    <img src="Service crew ready to assist.png" class="main-illustration" alt="Service Provider">


     

    <div class="floating-badge badge-top-left">
      <span class="badge-icon">✔️</span>
      <div>
        <strong>Verified</strong><br>Professionals
      </div>
    </div>

  <div class="floating-badge badge-bottom-left">
    <span class="badge-icon purple-tint">⚡</span>
    <div><strong>Quick &</strong><br>Booking</div>
  </div>

  <div class="floating-badge badge-top-right">
    <span class="badge-icon green-tint">🏷️</span>
    <div><strong>Affordable</strong><br>Prices</div>
  </div>

  <div class="floating-badge badge-bottom-right">
    <span class="badge-icon pink-tint">🎧</span>
    <div><strong>24/7</strong><br>Support</div>
  </div>
</div>
  

 

</section>
 <section class="how-it-works howSection">
  <h2 class="how-section-title">How it Works</h2>
  
  <div class="steps-container">
    <div class="step-item">
      <div class="icon-circle bg-blue">
        <i class="search-icon">🔍</i>
        <span class="step-number">1</span>
      </div>
      <div class="step-text">
        <p class="step-label">Search</p>
        <p class="step-desc">Find the service you need</p>
      </div>
    </div>

    <div class="arrow">→</div>

    <div class="step-item">
      <div class="icon-circle bg-green">
        <i class="choose-icon">📋</i>
        <span class="step-number">2</span>
      </div>
      <div class="step-text">
        <p class="step-label">Choose</p>
        <p class="step-desc">Pick a trusted professional</p>
      </div>
    </div>

    <div class="arrow">→</div>

    <div class="step-item">
      <div class="icon-circle bg-purple">
        <i class="book-icon">📅</i>
        <span class="step-number">3</span>
      </div>
      <div class="step-text">
        <p class="step-label">Book & Relax</p>
        <p class="step-desc">Book and get the job done</p>
      </div>
    </div>
  </div>
</section>
<!-- <section class="how-it-works-full how_section">
  <div class="content-wrapper">
    <h2 class="section-title">How it Works</h2>
    
    <div class="steps-grid">
      <div class="step-card">
        <div class="icon-wrap bg-soft-blue">
          <span class="main-icon">🔍</span>
          <span class="badge">1</span>
        </div>
        <div class="text-wrap">
          <h3>Search</h3>
          <p>Find the service you need</p>
        </div>
      </div>

      <div class="connector">
        <svg width="60" height="20"><path d="M0 10 Q30 0 60 10" stroke="#cbd5e1" fill="transparent" stroke-dasharray="5,5" /></svg>
      </div>

      <div class="step-card">
        <div class="icon-wrap bg-soft-green">
          <span class="main-icon">📋</span>
          <span class="badge">2</span>
        </div>
        <div class="text-wrap">
          <h3>Choose</h3>
          <p>Pick a trusted professional</p>
        </div>
      </div>

      <div class="connector">
        <svg width="60" height="20"><path d="M0 10 Q30 20 60 10" stroke="#cbd5e1" fill="transparent" stroke-dasharray="5,5" /></svg>
      </div>

      <div class="step-card">
        <div class="icon-wrap bg-soft-purple">
          <span class="main-icon">📅</span>
          <span class="badge">3</span>
        </div>
        <div class="text-wrap">
          <h3>Book & Relax</h3>
          <p>Book and get the job done</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

 <section class="categories-container">
    <h2 class="section-title">Browse Categories</h2>
    <div class="categories-grid">
        <button class="category-card ">
            <div class="icon-wrapper blue"><i class="fas fa-tint"></i></div>
            <span>Plumber</span>
        </button>
        
        <button class="category-card">
            <div class="icon-wrapper yellow"><i class="fas fa-bolt"></i></div>
            <span>Electrician</span>
        </button>
        
        <button class="category-card">
            <div class="icon-wrapper purple"><i class="fas fa-book-open"></i></div>
            <span>Tutor</span>
        </button>
        
        <button class="category-card">
            <div class="icon-wrapper green"><i class="fas fa-broom"></i></div>
            <span>Cleaner</span>
        </button>
        
        <button class="category-card">
            <div class="icon-wrapper pink"><i class="fas fa-paint-roller"></i></div>
            <span>Painter</span>
        </button>
        
        <button class="category-card">
            <div class="icon-wrapper orange"><i class="fas fa-hammer"></i></div>
            <span>Carpenter</span>
        </button>
        
        <button class="category-card">
            <div class="icon-wrapper grey"><i class="fas fa-ellipsis-h"></i></div>
            <span>More</span>
        </button>
    </div>
</section>


<section class="popular_services-section">
  <h2 class="service_title">Popular Services 
    <span class="viewAll_title"><a href="services.php">View All
      <i class="fa-solid fa-chevron-right"></i></a>
    </span>
  </h2>
 

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
    

      <div class="images-services carpenter">
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
        <a href="booking.php?service=electrician&provider=Sameer" class="viewProfile">
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



    <div class="images-services cleaing">
      <img src="CleanerFolder/Cleaner1.jpg" alt="cleaning">
      <h3>Cleaing Home Services</h3>
      <p>Cleaning Services</p>
        <p><i class="fa-solid fa-star"></i>4.6(220)</p>
      <p><i class="fa-solid fa-location-dot"></i>Dehradun</p>
      <a href="booking.php?service=cleaner&provider=CleanHome" class="viewProfile">
  Book Now
</a>
    </div>
  </div>

</section>

<!-- Trust bar section ........ -->

<section class="trust-bar">
  <div class="trust-item">
    <div class="trust-icon blue-tint">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
  <path d="m9 12 2 2 4-4"/>
</svg>
    </div>
    <div class="trust-text">
      <h4>Verified Professionals</h4>
      <p>Background checked experts</p>
    </div>
  </div>

  <div class="trust-item">
    <div class="trust-icon blue-tint">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
  <rect width="8" height="5" x="8" y="11" rx="1"/>
  <path d="M10 11V9a2 2 0 1 1 4 0v2"/>
</svg>
    </div>
    <div class="trust-text">
      <h4>Safe & Secure</h4>
      <p>Your safety is our priority</p>
    </div>
  </div>

  <div class="trust-item">
    <div class="trust-icon blue-tint">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M6 3h12l4 6-10 12L2 9z"/>
  <path d="M11 13a2 2 0 1 0 2 2"/>
  <path d="M12 9v4"/>
</svg>

    </div>
    <div class="trust-text">
      <h4>Best Price Guarantee</h4>
      <p>Quality services at best prices</p>
    </div>
  </div>

  <div class="trust-item">
    <div class="trust-icon blue-tint">
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M3 11a9 9 0 0 1 18 0v7a3 3 0 0 1-3 3h-3l-1-4h3a1 1 0 0 0 1-1V11"/>
  <path d="M21 11v1a9 9 0 0 1-9 9h-1"/>
  <rect width="4" height="8" x="2" y="11" rx="2"/>
</svg>
    </div>
    <div class="trust-text">
      <h4>24/7 Customer Support</h4>
      <p>We are always here to help</p>
    </div>
  </div>
</section>


<!-- Footer .///...... -->

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

 

<!-- <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script> -->

<script src="home.js"></script>
     
    
</body>
</html>
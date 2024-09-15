<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <meta name="keywords" content="about event booking, event management company, event planning, online booking services, company background">
  <meta name="description" content="Learn more about our company, our mission, and how we aim to provide the best event booking and management services to make your experience seamless.">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-1.7.0.min.js"></script>
</head>

<body>
   <!-- Navigation Menu -->
   <header>
    <div class="nav-container">
      <h1>Siddiqui Event's</h1>
      <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="about-us.php">About</a></li>
          <li><a href="services.php">Our Services</a></li>
          <li><a href="testimonials.php">Testimonials</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="booking.php">Booking</a></li>
          <?php
          if(!isset($_SESSION["userid"])){
          ?>
          <li><a href="login.php">Login</a></li>
          <?php
          }
          else{
            ?>
            <li><a href="booking-history.php">Booking History</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php
          }
          ?>
          
        </ul>
      </nav>
      <span class="burgerMenu">
        <i class="fa fa-bars"></i>
    </span>
  </div>
  </header>

  <!-- About Us -->
  <section class="about-us">
    <h2>About Us</h2>
    <div class="about-container">
        <div class="image-area">
            <img src="img/about-us.jpg" alt="">
            
          </div>
      <div class="text-area">
        <h4>Our Story</h4>
                <p>We are a dedicated team of event planners with a passion for creating unforgettable experiences. Founded in [Year], our company has grown from a small startup to a leading event planning service provider. Our mission is to deliver exceptional events that exceed our clients' expectations.</p>
                <br><br>
                <h4>Our Mission</h4>
                <p>Our mission is to bring your vision to life with meticulous planning, creative design, and flawless execution. Whether it's a corporate event, wedding, or private party, we strive to make every event unique and memorable.</p>
                <br><br>
                <h4>Our Team</h4>
                <p>Our team consists of experienced event planners, designers, and coordinators who are passionate about what they do. Each team member brings their expertise and creativity to ensure that every event is a success.</p>
                <br><br>
                <h4>Awards and Recognitions</h4>
                <p>We are proud to have received numerous awards for our outstanding event planning services. Our commitment to excellence has been recognized by clients and industry professionals alike.</p>

      </div>
      

    </div>
  </section>
  
  <button id="scrollTop" onclick="scrollButton()">Scroll to Top</button>
  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Siddiqui Event's. All rights reserved.</p>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>
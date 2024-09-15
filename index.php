<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <meta name="keywords" content="event booking, book events online, event management, concerts, conferences, book venues, event tickets, online booking platform">
  <meta name="description" content="Book your events online with ease. From concerts and conferences to weddings and parties, our platform makes event booking simple and hassle-free.">
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

  <!-- Image Slider -->
  <div id="slider">
    <img class="slide" src="img/coporate-events.jpg" width="100%">
    <img class="slide" src="img/festivals.jpg" width="100%">
    <img class="slide" src="img/parties.jpg" width="100%">
  </div>

  

  <section class="goal-container">
    <h2>Welcome to Siddiqui Events</h2>
    <div class="info">
      <div class="img-area">
        
        <img src="img/welcome.jpg" alt="">
        
      </div>
      <!-- Welcome Message -->
      
      <p>Welcome to Siddiqui Events, where your dreams become reality. We are a passionate team of event planners dedicated to creating unforgettable experiences. Whether you're planning a corporate event, a wedding, or a private party, we bring your vision to life with meticulous attention to detail, innovative design, and seamless execution. Our mission is to deliver exceptional events that exceed your expectations and leave lasting memories. With years of experience and a commitment to excellence, we are your trusted partner in crafting extraordinary events. Join us on this journey and let's create something amazing together. Your perfect event starts here.
        
       </p>
       
    </div>
    
  </section>
  <!-- About Us -->
  <section class="about-us">
    <h2>About Us</h2>
    <div class="about-container">
      
      <div class="text-area">
        <p>Welcome to Siddiqui Events, where we turn your event dreams into reality. Founded in [Year], we have grown from a small, passionate team to a leading event planning service provider, renowned for our creativity, attention to detail, and commitment to excellence.</p>
                
        <p>Our journey began with a vision to deliver exceptional events that leave lasting memories. Over the years, we have had the privilege of planning and executing a diverse range of events, from corporate conferences and festivals to intimate weddings and private parties. Each event is unique, and we pride ourselves on tailoring our services to meet the specific needs and desires of our clients.</p>
        
        <p>At the heart of our success is our dedicated team of event planners, designers, and coordinators. Each team member brings a wealth of experience and a passion for creating extraordinary experiences. We work collaboratively to ensure every detail is meticulously planned and flawlessly executed, allowing our clients to relax and enjoy their special moments.</p>
        
        <p>Our commitment to quality has not gone unnoticed. We are honored to have received numerous awards and recognitions from industry professionals and satisfied clients. These accolades reflect our unwavering dedication to delivering top-notch services and our continuous strive for excellence.</p>
        
        <p>We invite you to explore our services and see how we can bring your vision to life. Whether you're planning a large corporate event or an intimate gathering.</p>
         </p>
          <a href="about-us.php">More About Us</a>
      </div>
      <div class="image-area">
        <img src="img/about-us.jpg" alt="">
      
      </div>

    </div>
  </section>

  <!-- About Us -->
  <section class="what-we-offer">
    <h2>What we Offer</h2>
    
    <section>
      <h3>Corporate Events</h3>
      <p>We provide comprehensive corporate event planning services, ensuring your business gatherings are professional, seamless, and memorable. From conferences to product launches, we handle every detail.</p>
  </section>

 
  <section>
      <h3>Festivals</h3>
      <p>We specialize in organizing large-scale festivals, offering end-to-end services from planning and logistics to on-site management. Our expertise ensures your festival is a resounding success.</p>
  </section>


  <section>
      <h3>Private Parties</h3>
      <p>From birthday celebrations to anniversary parties, we create customized private parties that reflect your style and preferences. Our team ensures every detail is perfect for a memorable event.</p>
  </section>
  </section>

 
 <!-- Scroll to top button -->
  <button id="scrollTop" onclick="scrollButton()">Scroll to Top</button>

  
   <!-- Footer -->
  <footer>
    <p>&copy; 2024 Siddiqui Event's. All rights reserved.</p>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>

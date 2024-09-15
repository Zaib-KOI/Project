<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Services</title>
        <meta name="keywords" content="event services, event management, event planning, online booking services, venue booking, conference booking, wedding planning, event coordination">
        <meta name="description" content="Explore our wide range of event services, from venue booking and event planning to conference organization and wedding coordination. We're here to help you every step of the way.">
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

          
     
          <section class="my-services">
            <h2>Our Services</h2>
            <div class="service-container">
                <div class="service">
                    <h3>Corporate Events</h3>
                    <div>
                        <img src="img/coporate-events.jpg" alt="">
                    </div>
                    <p>We offer comprehensive corporate event planning services to ensure your business gatherings are successful and memorable. From conferences to team-building events, we've got you covered.</p>
                </div>
                <div class="service">
                    <h3>Weddings</h3>
                    <div>
                        <img src="img/weddings.jpg" alt="">
                    </div>
                    <p>Our wedding planning services provide everything you need for a perfect wedding day. We handle every detail so you can enjoy your special day without stress.</p>
                </div>
                <div class="service">
                    <h3>Private Parties</h3>
                    <div>
                        <img  src="img/parties.jpg" alt="">
                    </div>
                    <p>From birthday parties to anniversary celebrations, we create unforgettable private parties tailored to your needs and preferences. Our team takes care of every detail, ensuring your event is unique and memorable.</p>

                </div>
                <div class="service">
                    <h3>Festivals</h3>
                    <div>
                        <img src="img/festivals.jpg" alt="">
                    </div>
                    <p>Our team specializes in organizing large-scale festivals, ensuring every aspect is meticulously planned and executed for an amazing experience.</p>
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

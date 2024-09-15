<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonials</title>
  <meta name="keywords" content="event testimonials, customer reviews, client feedback, event booking reviews, user experiences, event planning feedback">
  <meta name="description" content="Read what our satisfied customers have to say about our event booking platform and how we helped make their events successful and stress-free.">
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
  

<section class="testimonials">
  <h2>Testimonials</h2>
  <div class="testimonial">
      <img src="img/client1.jfif" alt="Client 1">
      <div class="testimonial-description">
          <p>"Siddiqui Event exceeded all our expectations for our corporate event. The attention to detail and professionalism were outstanding. Our guests were impressed, and we couldn't be happier with the result."</p>
          <h3>- John Doe, CEO of ABC Corp</h3>
      </div>
  </div>
  <div class="testimonial">
      <img src="img/client2.jfif" alt="Client 2">
      <div class="testimonial-description">
          <p>"Our wedding was a dream come true thanks to [Your Company Name]. Every aspect of the day was perfect, from the beautiful decorations to the seamless coordination. We are forever grateful for their hard work and dedication."</p>
          <h3>- Jane Smith, Bride</h3>
      </div>
  </div>
  <div class="testimonial">
      <img src="img/client3.jfif" alt="Client 3">
      <div class="testimonial-description">
          <p>"I hired Siddiqui Event for my birthday party, and they delivered an unforgettable experience. The team was creative, attentive, and ensured that everything went smoothly. I highly recommend their services for any event."</p>
          <h3>- Mike Johnson, Birthday Celebrant</h3>
      </div>
  </div>
  <div class="testimonial">
      <img src="img/client4.jpg" alt="Client 4">
      <div class="testimonial-description">
          <p>"Organizing a festival is no small feat, but [Your Company Name] handled it with expertise and flair. The event was a huge success, and we received fantastic feedback from attendees. Thank you for making it all possible!"</p>
          <h3>- Emily Davis, Festival Organizer</h3>
      </div>
  </div>
  <div class="testimonial">
      <img src="img/client5.jfif" alt="Client 5">
      <div class="testimonial-description">
          <p>"Our conference went off without a hitch, thanks to the exceptional planning and coordination by [Your Company Name]. They managed every detail, allowing us to focus on our content and attendees. We will definitely work with them again."</p>
          <h3>- Robert Brown, Conference Planner</h3>
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
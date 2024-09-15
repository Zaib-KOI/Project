<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <meta name="keywords" content="contact event booking, event support, customer service, event help, event inquiries, contact us, help center">
  <meta name="description" content="Get in touch with us for any event-related queries, support, or assistance. We're here to help you with all your event booking needs.">
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

  <!-- Contact Us Form -->
<section class="contact">
    <h1>Contact Us</h1>
    <form id="contact-form" onsubmit="submitForm(event)">
      <!-- Name Field -->
      <div class="field">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name">
      </div>
      <!-- Email Address Field -->
      <div class="field">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Email Address">
      </div>
      <!-- Phone number field -->
      <div class="field">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="Phone Subject">
      </div>
      <!-- Message Field -->
      <div class="field">
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Type your message here"></textarea>
      </div>
      <!-- Submit Button -->
      <button type="submit">Submit</button>
    </form>
  </section>
  
  <button id="scrollTop" onclick="scrollButton()">Scroll to Top</button>
  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Siddiqui Event's. All rights reserved.</p>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>
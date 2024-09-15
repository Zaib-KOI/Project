<?php
session_start();
include "connection.php";
if(!isset($_SESSION["userid"])){
	header("Location:login.php");
 }
if(isset($_POST['book'])){
    $id=$_SESSION["userid"];
    $full_name = trim($_POST["full-name"]);
    $event = trim($_POST["event"]);
    $booking_date = trim($_POST["booking-date"]);
    $booking_time = trim($_POST["booking-time"]);
    
    $sql = "INSERT INTO bookings (user_id, user_name, booking_date, booking_time, event) VALUES ('$id', '$full_name', '$booking_date', '$booking_time','$event')";
    if(mysqli_query($conn,$sql)){
        $success_message = "Event has been booked successfully!";
        echo "<script>alert('$success_message');</script>";
    } else {
        $error_message = "Event couldn't be booked successfully!";
        echo "<script>alert('$error_message');</script>";
    }
        
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Booking</title>
  <meta name="keywords" content="book an event, event booking, reserve a venue, book tickets, event registration, online booking system">
  <meta name="description" content="Book your next event with ease. Our platform allows you to quickly reserve venues, purchase tickets, and manage your event bookings effortlessly.">
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
    <h1>Event Booking</h1>
    <form method='POST'>
      <!-- Name Field -->
      <div class="field">
        <label for="f-name">Full Name:</label>
        <input type="text" id="f-name" name="full-name" placeholder="Your First Name">
      </div>
       <!-- Name Field -->
       <div class="field">
        <label for="event">Choose Event:</label>
        <select name="event" id="event">
            <option value="Corporate Events">Corporate Events</option>
            <option value="Weddings">Weddings</option>
            <option value="Private Parties">Private Parties</option>
            <option value="Festivals">Festivals</option>
        </select>
      </div>
      <!-- Email Address Field -->
      <div class="field">
        <label for="date">Booking Date:</label>
        <input type="date" id="date" name="booking-date" placeholder="Booking Date">
      </div>
      <!-- Phone number field -->
      <div class="field">
        <label for="time">Booking Time:</label>
        <input type="time" id="time" name="booking-time" placeholder="Booking Time">
      </div>
      
      <!-- Submit Button -->
      <button name='book' type="submit">Book Now</button>
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
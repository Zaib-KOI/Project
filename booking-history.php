<?php
session_start();
include "connection.php";
if(!isset($_SESSION["userid"])){
	header("Location:login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking History</title>
  <meta name="keywords" content="booking history, event bookings, past events, view event history, booked events, booking details">
  <meta name="description" content="View your past bookings and event history. Keep track of the events you've booked and manage your bookings easily from one place.">
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
    <h1>Booking History</h1>
    <?php
// Assuming the user ID is stored in the session
$id = $_SESSION['userid'];

// Query to get all bookings for the logged-in user
$sql = "SELECT * FROM bookings WHERE user_id = '$id'";
$result = mysqli_query($conn, $sql);

// Check if any results were returned
if (mysqli_num_rows($result) > 0) {
    echo '<table class="styled-table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Booking Event</th>';
    echo '<th>Booking Date</th>';
    echo '<th>Booking Time</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Fetch and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['event'] . '</td>';
        echo '<td>' . $row['booking_date'] . '</td>';
        echo '<td>' . $row['booking_time'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo "<p>No bookings found.</p>";
}
?>

  </section>
  
  <button id="scrollTop" onclick="scrollButton()">Scroll to Top</button>
  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Siddiqui Event's. All rights reserved.</p>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>
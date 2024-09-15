<?php
session_start();
include "connection.php";
if(isset($_POST['login'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    // Server-side validation
    $errors = [];

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // If there are errors, display them in an alert
    if (count($errors) > 0) {
        $error_message = implode("\\n", $errors);
        echo "<script>alert('$error_message');</script>";
    } else {
        // Query the database
        $sql = "SELECT * FROM users WHERE email='" . mysqli_real_escape_string($conn, $email) . "' LIMIT 1";  
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        
        if ($count == 1) {
            $row = mysqli_fetch_array($result);
            if (password_verify($password, $row['password'])) {
                // Successful login
                $_SESSION['userid'] = $row['id'];
                $_SESSION['Fullname'] = $row['first_name'] . " " . $row['last_name'];
                $_SESSION['Email'] = $row['email'];
                $_SESSION['Phone'] = $row['phone'];
                echo "<script>location.href='profile.php';</script>";
            } else {
                // Incorrect password
                echo "<script>alert('Incorrect Password');</script>";
            }
        } else {
            // Incorrect email
            echo "<script>alert('Incorrect Email');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <meta name="keywords" content="event login, user login, event booking account, login to book events, sign in for events, event platform login">
  <meta name="description" content="Log in to your account to manage your event bookings, view your booking history, and access personalized event services.">
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
    <h1>Login</h1>
    <form method='POST'>
     
      <!-- Email Address Field -->
      <div class="field">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Email Address">
      </div>
      

      <!-- Phone number field -->
      <div class="field">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password">
      </div>

      <a class='account-btn' href="register.php">Don't have account?</a>
      
      <!-- Submit Button -->
      <button name='login' type="submit">Submit</button>
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
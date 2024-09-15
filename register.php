<?php
include "connection.php";
if(isset($_POST['register'])){
    $first_name = trim($_POST["first-name"]);
    $last_name = trim($_POST["last-name"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST['password']);
    
    $errors = [];

    // PHP Validation
    if (empty($first_name) || strlen($first_name) < 3) {
        $errors[] = "First name must be at least 3 characters.";
    }
    if (empty($last_name) || strlen($last_name) < 3) {
        $errors[] = "Last name must be at least 3 characters.";
    }
    if (!preg_match("/^[0-9]{11}$/", $phone)) {
        $errors[] = "Phone number must be 11 digits.";
    }
    if (empty($password) || strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    // Show errors if any exist
    if (count($errors) > 0) {
        $error_message = implode("\\n", $errors);
        echo "<script>alert('$error_message');</script>";
    } else {
        // Continue with the registration
        $_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM users WHERE email='$email'";
        $res = mysqli_query($conn,$sql);
        if ($res->num_rows > 0) {
            $error_message = "Email Already Exists!";
            echo "<script>alert('$error_message');</script>";
        } else {
            $sql1 = "INSERT INTO users (first_name, last_name, email, phone, password) VALUES ('$first_name', '$last_name', '$email', '$phone','$_password')";
            if(mysqli_query($conn,$sql1)){
                $success_message = "Your account has been created successfully!";
                echo "<script>alert('$success_message');</script>";
            } else {
                $error_message = "Your account couldn't be created successfully!";
                echo "<script>alert('$error_message');</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <meta name="keywords" content="register for event booking, create account, sign up, join event booking platform, event registration, user sign up">
  <meta name="description" content="Create an account on our event booking platform to access a wide range of services, including venue booking, ticket purchasing, and event planning.">
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
    <h1>Register</h1>
    <form method='POST'>
      <!-- Name Field -->
      <div class="field">
        <label for="f-name">First Name:</label>
        <input type="text" id="f-name" name="first-name" placeholder="Your First Name">
      </div>
       <!-- Name Field -->
       <div class="field">
        <label for="l-name">Last Name:</label>
        <input type="text" id="l-name" name="last-name" placeholder="Your Last Name">
      </div>
      <!-- Email Address Field -->
      <div class="field">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Email Address">
      </div>
      <!-- Phone number field -->
      <div class="field">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Phone">
      </div>

      <!-- Phone number field -->
      <div class="field">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password">
      </div>

      <a class='account-btn' href="login.php">Already have an account?</a>
      
      <!-- Submit Button -->
      <button name='register' type="submit">Submit</button>
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
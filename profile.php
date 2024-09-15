<?php
session_start();
include "connection.php";
if(!isset($_SESSION["userid"])){
	header("Location:login.php");
 }
 $id = $_SESSION['userid'];
$sql = "SELECT * FROM users WHERE id = '$id'" ;
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if(isset($_POST['change'])){
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $phone = $_POST["phone"];
 
    
       
            $sql2 = "UPDATE users 
         SET 
            first_name = '$first_name', 
            last_name = '$last_name',  
            phone = '$phone'
         WHERE 
            id = $id"; 

            if(mysqli_query($conn,$sql2)){
                echo "<script>alert('Your profile has been updated successfully!');</script>";
            }
            else{
                echo "<script>alert('Your profile couldn,t updated successfully!');</script>";
            }
                
        
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
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
    <h1>Profile</h1>
    <form method='POST'>
      <!-- Name Field -->
      <div class="field">
        <label for="f-name">First Name:</label>
        <input type="text" id="f-name" name="first-name" value='<?=$row['first_name']?>' placeholder="Your First Name">
      </div>
       <!-- Name Field -->
       <div class="field">
        <label for="l-name">Last Name:</label>
        <input type="text" id="l-name" name="last-name" value='<?=$row['last_name']?>' placeholder="Your Last Name">
      </div>
      <!-- Email Address Field -->
      <div class="field">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" value='<?=$row['email']?>' placeholder="Email Address" readonly>
      </div>
      <!-- Phone number field -->
      <div class="field">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value='<?=$row['phone']?>' placeholder="Phone">
      </div>

      

      
      
      <!-- Submit Button -->
      <button name='change' type="submit">Submit</button>
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
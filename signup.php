<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="styles2.css" />
    <title>Register | Malcolm Lismore Photographer</title>
    <link rel="icon" type="image/x-icon" href="/image/icon.png">
  </head>
  <body>
    <header class="header" id="home">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <img src="image/logo1.png" alt="logo" />
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="index.php">HOME</a></li>
          <li><a href="index.php#about">ABOUT US</a></li>
          <li><a href="#" onclick="alert('Please Login First !'); return false;">PACKAGES</a></li>
          <li class="nav__logo">
            <img src="image/logo1.png" alt="logo"/>
          </li>
          <li><a href="#" onclick="alert('Please Login First !'); return false;">GALLERY</a></li>
          <li><a href="#" onclick="alert('Please Login First !'); return false;">BLOG</a></li>
          <li><a href="#" onclick="alert('Please Login First !'); return false;">CONTACT US</a></li>
        </ul>
      </nav>
      <nav>
        <div class="header__name">
          <h2 class="section__header2">Malcolm Lismore Photographer</h2>
        </div>
      </nav>
    </header>

    <section class="section__container">
    <h2 class="section__header">~ Register ~</h2><br><br>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="signupForm">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>

            <label for="idno">NIC Number:</label><br>
            <input type="text" id="idno" name="idno" placeholder="Enter your ID number" required><br><br>

            <label for="phone">Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Enter your phone number" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>

            <label for="repassword">Re-enter Password:</label><br>
            <input type="password" id="repassword" name="repassword" placeholder="Re-enter your password" required><br>

            <span id="password-strength" style="font-weight: bold;"></span><br>

            <input type="submit" value="Register">

            <a href="login.php">You have an account</a>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Check if the form is submitted
            // Database connection settings
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "photog";  // Ensure your database name is correct

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Collect form data and sanitize it
            $name = $conn->real_escape_string($_POST['name']);
            $phone = $conn->real_escape_string($_POST['phone']);
            $email = $conn->real_escape_string($_POST['email']);
            $nic = $conn->real_escape_string($_POST['idno']);
            $password = $conn->real_escape_string($_POST['password']);

            // Check if the email already exists
            $emailCheckQuery = "SELECT * FROM logind WHERE email='$email'";
            $result = $conn->query($emailCheckQuery);

            if ($result->num_rows > 0) {
                // Email exists, show an error message
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                          alert('Email is already registered, please use another email.');
                        });
                      </script>";
            } else {
                // If email does not exist, proceed with the registration
                $sql = "INSERT INTO logind (email, c_name, nic_no, ph_no, passw) 
                        VALUES ('$email', '$name', '$nic', '$phone', '$password')";

                if ($conn->query($sql) === TRUE) {
                    // Redirect to the same page with a success flag to trigger the notification
                    header("Location: " . $_SERVER['PHP_SELF'] . "?status=success");
                    exit();  // Ensure script stops after redirect
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            // Close the connection
            $conn->close();
        }
        ?>

        <!-- JavaScript for Strong Password Check -->
        <script>
            const password = document.querySelector('#password');
            const repassword = document.querySelector('#repassword');

            // Check for password matching
            const form = document.querySelector('#signupForm');
            form.addEventListener('submit', function (e) {
                if (password.value !== repassword.value) {
                    e.preventDefault();
                    alert("Passwords do not match!");
                }
            });
        </script>
      </div>
    </section>

    <footer id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <img src="image/logo2.png" alt="logo" />
          <div class="footer__socials">
            <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-fill"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://x.com/" target="_blank"><i class="ri-twitter-fill"></i></a>
            <a href="https://www.youtube.com/" target="_blank"><i class="ri-youtube-fill"></i></a>
            <a href="https://www.pinterest.com/" target="_blank"><i class="ri-pinterest-line"></i></a>
          </div>          
        </div>
        <div class="footer__col">
          <ul class="footer__links">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#" onclick="alert('Please Login First !'); return false;">GALLERY</a></li>
            <li><a href="index.php#about">ABOUT US</a></li>
            <li><a href="#" onclick="alert('Please Login First !'); return false;">BLOG</a></li>
            <li><a href="#" onclick="alert('Please Login First !'); return false;">PACKAGES</a></li>
            <li><a href="#" onclick="alert('Please Login First !'); return false;">CONTACT US</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>STAY CONNECTED</h4>
          <p>
            Join the Capturer community and stay updated on the latest trends, tips, and photography moments. Be part of our journey and never miss a shot!
          </p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Malcolm Lismore Photographer. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>

<?php
 session_start();
 if (isset($_SESSION["user"])) {
   header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="singup.css" />
    <link rel="icon" href="images\dog_logo_1.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>    <!-- Header Section -->
    <header>
      <a href="home.php">
        <img class="logo" src="images\print.png" alt="logo"
      /></a>
      <nav>
        <ul class="nav_links">
          <li><a href="final-img-gallary.php">PET'S GALLERY</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="home.php"href="#contact1" >INQUIRY</a></li>
          <li><a href="contact1.php">CONTACT</a></li>
          <li><a class="cta" href="donation.php">DONATE</a></li>
          <li><a href="tel:18008903551">TOLL FREE: 1800 890 3551</a></li>
        </ul>
      </nav>
      <a class="cta1" href="login.php"><button>LOGIN</button></a>
      <a class="cta1" href="logout.php"><button>LOG OUT</button></a>
    </header>

    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"<div  class='form2' >All fields are required.</div>");
        }
        
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='form2'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='form1'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <form action="registration.php" method="post" class="form">
        <span class="signup">Sign Up</span>

            
            <input type="text" placeholder="Enter Name" class="form--input" name="fullname"/>
            
            <input type="email" placeholder="Email address" class="form--input" name="email" />
            <input type="password" placeholder="Password" class="form--input" name="password"/>
            <input type="password" class="form--input" name="repeat_password" placeholder="Repeat Password:">
        <br />
        <input type="submit" value="Sign up" name="submit" class="form--submit">
        <div class="form-footer">
            <p>Have an account? <a href="login.php">Log in</a></p>
        </div>
        </form>
    </div>
    <section>
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-logo">
                    <img src="images\print.png" alt="Logo" />
                    <p style="font-size: medium">
                        Where Every Tail Wags with Joy: Your One-Stop Pet Paradise.
                        <br />
                        Explore a world of premium pet products at Your Pet Shop Name,
                        <br />
                        where we're dedicated to quality and convenience. Join our
                        community!
                    </p>
                </div>
                <div class="social-links">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>
                            <a href="#" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-snapchat-ghost"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
            <div class="footer-bottom">
                <ul class="footer-nav">
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="final-img-gallery.html">PET'S GALLERY</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="#contact1">INQUIRY</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
                <div style="color: black">copyright@gmail.com</div>
            </div>
        </div>
    </footer>
</section>
</body>
</html>
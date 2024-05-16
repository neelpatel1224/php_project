<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="contact.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="shortcut icon" href="images/dog_logo_1.ico" />
</head>

<body>
        <!-- Header Section -->
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
    <section>
      <div class="container1">
        <h1 class="animated fadeIn">Get in Touch</h1>
        <div class="hr1">
        <div class="form-container1 animated fadeIn">
          <?php
if (isset($_POST["submit"])) {
    $fullName = $_POST["full-name"];
    $m_num = $_POST["mobile-number"];
    $cn_email = $_POST["cn_email"];
    $msg = $_POST["userMsg"];

    require_once "database.php";
    $sql = "INSERT INTO `contact` (`c_name`, `c_number`, `c_email`, `c_message`) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
    if ($prepareStmt) {
        // Assuming all parameters are strings (s)
        mysqli_stmt_bind_param($stmt, "ssss", $fullName, $m_num, $cn_email, $msg);
        mysqli_stmt_execute($stmt);
        echo "<div class=' form1'>Your message was successfully sent.</div>";
    } else {
        die("Something went wrong");
    }
}
?>

          <form id="donation-form" method="post">
            <div>
                <span><label>Your Name 
                </label></span>
                <span
                  ><input name="full-name" type="text"  placeholder="e.g Jone"  required
                /></span>
              </div> <div>
                <span><label>Phone Number  
                </label></span>
                <span
                  ><input
                  type="tel"
                  name="mobile-number"
                  placeholder="99999 0000"
                  pattern="[0-9]{10}"
                  required
                /></span>
              </div>
              <div>
                <span><label>Email Address 
                </label></span>
                <span
                  ><input name="cn_email" type="text" class="textbox" placeholder="xyz@gmail.com"
                /></span>
              </div>
              <div>
                <span><label>Message</label></span>
                <span><textarea name="userMsg"  placeholder="e.g Reason for contact" > </textarea></span>
              </div>
            
            <input type="submit" value="Send" name="submit" class="s1">
          </form>
        </div>
      </div>
    </section>
    <!-- footer section -->
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
              <li><a href="home.php">HOME</a></li>
              <li><a href="final-img-gallary.php">PET'S GALLERY</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="#contact1">INQUIRY</a></li>
              <li><a href="contact.php">CONTACT</a></li>
            </ul>
            <div style="color: black">copyright@gmail.com</div>
          </div>
        </div>
      </footer>
    </section>
  </body>
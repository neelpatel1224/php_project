<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pet Shop</title>
    <link rel="stylesheet" href="home.css" />
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
          <li><a href="#contact1">INQUIRY</a></li>
          <li><a href="contact1.php">CONTACT</a></li>
          <li><a class="cta" href="donation.php">DONATE</a></li>
          <li><a href="tel:18008903551">TOLL FREE: 1800 890 3551</a></li>
        </ul>
      </nav>
      <a class="cta1" href="login.php"><button>LOGIN</button></a>
      <a class="cta1" href="logout.php"><button>LOG OUT</button></a>
    </header>

    <!-- Banner Section -->
    <section class="banner">
      <div class="container">
        <div class="banner-content">
          <div class="banner-text">
            <h1>Best Pet Clinic</h1>
            <p>
            Experience exceptional care for your beloved pets at our Best Pet Clinic. Our dedicated team of veterinarians provides top-notch medical services and personalized attention to ensure the health and happiness of your furry companions. Trust us to be your partner in your pet's well-being, because at Best Pet Clinic, your pet's health is our priority.
            </p>
            <a href="#" class="cta-btn">Explore Services</a>
          </div>
          <div class="banner-image">
            <div>
              <img
                class="grid-item grid-item-10"
                src="bestshop.jpg"
                alt="shop"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="about">
      <div class="container">
        <div class="about-content">
          <div class="about-image">
            <div>
              <img
                class="grid-item-grid-item-2"
                src="dl.beatsnoop.com-3000-IspZY7MCV3.jpg"
                alt=""
              />
            </div>
          </div>
          <div class="about-text">
            <h2>About Pets</h2>
            <p>
              - Pets provide companionship and can help reduce stress and
              anxiety. <br />- They require regular care and attention,
              including feeding, grooming, and exercise. <br />
              - Owning a pet can encourage a more active lifestyle and
              opportunities for socialization. <br />
              - Pets can teach responsibility and empathy, especially in
              children.
            </p>
            <button class="read-more">Read More</button>
          </div>
          <div class="about-image">
            <div>
              <img
                class="grid-item-grid-item-2"
                src="dl.beatsnoop.com-3000-fKqbZiHYhg.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
      <div class="container">
        <h2>Our Dogs</h2>
        <div class="gallery-images">
          <div>
            <img
              class="grid-item grid-item-4"
              src="https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
              alt=""
            />
          </div>
          <div>
            <img
              class="grid-item grid-item-2"
              src="dl.beatsnoop.com-3000-C9NbLdAwlH (1).jpg"
              alt=""
            />
          </div>
          <div>
            <img
              class="grid-item grid-item-7"
              src="[fetchpik.com]-high-k3AciJV7rE.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              class="grid-item grid-item-7"
              src="dl.beatsnoop.com-3000-OZHWkXF85G.jpg"
              alt=""
            />
          </div>
          <div>
            <img
              class="grid-item grid-item-7"
              src="[fetchpik.com]-high-skNJCcIiox.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Pet Adoption Section -->
    <section class="pet-adoption">
      <div class="container">
        <div class="pet-adoption-content">
          <div class="pet-adoption-text">
            <h2>Pet Adoption: Be Part of Something Beautiful</h2>
            <p>
              Consider giving a forever home to a furry friend in need. Adopting
              a pet not only changes their life but also enriches yours in
              countless ways. Find your perfect companion today!
            </p>
            <a href="#" class="adoption-btn">Learn More</a>
          </div>
          <div class="pet-adoption-image">
            <div>
              <img
                class="grid-item grid-item-7"
                src="adoptme-removebg.png"
                alt="Pet Adoption Image"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
      <div id="contact1">
        <div class="container">
          <div class="contact-content">
            <div class="contact-form">
              <h2>Inquiry for Pet</h2>
          <?php
              if (isset($_POST["submit"])) {
              $fullName = $_POST["iqr_name"];
              $m_num = $_POST["iqr_email"];
              $cn_email = $_POST["iqr_phone"];
              $msg = $_POST["iqr_message"];
                        
              require_once "database.php";
              $sql = "INSERT INTO `inquiry` (`iq_name`, `iq_email`, `iq_number`, `in_message`) VALUES (?, ?, ?, ?)";
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
              <form action="" method="post">
                <input type="text" name="iqr_name" placeholder="Your Name" />
                <input type="email" name="iqr_email" placeholder="Your Email" />
                <input
                  type="tel"
                  name="iqr_phone"
                  placeholder="Your Phone Number"
                />
                <textarea name="iqr_message" placeholder="Your Message"></textarea>
                            
                <input type="submit" value="Send Message" name="submit" class="submit-btn">
              </form>
            </div>
          </div>
          <div class="contact-info">
            <div class="info-item">
              <h3>Our Location</h3>
              <hr />
              <br />
              <p style="font-size: larger">
                Address: B - Chain Maharshi Apartment,<br />
                Behind New Over Bridge, Near Hero Showroom,<br />
                Ganesh Chowkdi, Anand <br />
                Pin Code - 388 121
              </p>
            </div>
            <div class="info-item">
              <h3>Contact Information</h3>
              <hr />
              <br />
              <p style="font-size: larger">
                E-mail : petshopInquiry1@petInquiry.com<br />
                Mobile No : + (91) - 99982 50699, <br />
                98251 59343, <br />
                98793 34325
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
          if (isset($_POST["submit"])) {
    $qus = $_POST["news_em"];

    require_once "database.php";
    $sql = "INSERT INTO `new_subscribe` (`news_emails`) VALUES (?)";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
    if ($prepareStmt) {
        // Assuming all parameters are strings (s)
        mysqli_stmt_bind_param($stmt, "s", $qus);
        mysqli_stmt_execute($stmt);
         echo "<center>.<div>Your question was successfully sent.</div> </center>";
    } else {
        die("Something went wrong");
    }
}
?>
    <!-- Newsletter Section -->
    <section class="newsletter">
      <div class="container">
        <div class="newsletter-content">
          <div class="newsletter-text">
            <h2>Subscribe to Our Newsletter</h2>
            <p>
              Stay updated on the latest news, events, and promotions by
              subscribing to our newsletter.
            </p>
          </div>
          <form action="" method="post">
          <div class="newsletter-form">
            <input type="email" placeholder="Enter your email" name="news_em"/>
            <input type="submit" name="submit" class="subscribe-btn" value="Subscribe">
          </div>
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
</php>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var contactLink = document.getElementById("contactLink");
    if (contactLink) {
      contactLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default behavior of the link
        scrollToContactSection();
      });
    }

    function scrollToContactSection() {
      var contactSection = document.getElementById("contact");
      if (contactSection) {
        contactSection.scrollIntoView({ behavior: "smooth" });
      }
    }
  });
</script>

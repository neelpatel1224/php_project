<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<?php
$displayDonationReceipt = false; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $donorName = isset($_POST["donor-name"]) ? $_POST["donor-name"] : "";
    $donationAmount = isset($_POST["donation-amount"]) ? $_POST["donation-amount"] : "";
    $mobileNumber = isset($_POST["mobile-number"]) ? $_POST["mobile-number"] : "";
    $donationPurpose = isset($_POST["donation-purpose"]) ? $_POST["donation-purpose"] : "";
    require_once "database.php";
    $sql = "INSERT INTO donation (d_name, d_amount, d_number, d_purpose) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
    if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $donorName, $donationAmount, $mobileNumber, $donationPurpose);
        mysqli_stmt_execute($stmt);
        $displayDonationReceipt = true;
    } else {
        die("Something went wrong");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation Form</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="donation.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="shortcut icon" href="images/dog_logo_1.ico" />
    <style>
      *,
      *::before,
      *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      /* Global Styles */
      body {
        font-family: "Open Sans", sans-serif;
        line-height: 1.6;
        background-color: #fbf2d0;
        color: #333;
        margin: 0;
        padding: 0;
      }

      .container1 {
        max-width: 800px;
        margin: 0 auto;
        padding: 47px;
      }

      h1 {
        text-align: center;
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 2.5rem;
        color: #333;
      }

      /* Form Styles */
      .form-container1 {
        margin-bottom: 40px;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      form {
        display: grid;
        gap: 20px;
      }

      input[type="text"],
      input[type="number"],
      input[type="tel"],
      select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: border-color 0.3s ease;
      }

      input[type="text"]:focus,
      input[type="number"]:focus,
      input[type="tel"]:focus,
      select:focus {
        outline: none;
        border-color: #4caf50;
      }

      button[type="submit"] {
        padding: 10px;
        width: 30%;
        margin-left: 216px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      button[type="submit"]:hover {
        background-color: #007bff;
      }

      /* Receipt Styles */
      .donation-receipt {
        background-color:#fbf2d0;
        margin-bottom: 40px;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: <?php echo $displayDonationReceipt ? "block" : "none"; ?>; /* Display based on condition */
      }

      .donation-receipt h2 {
        margin-bottom: 20px;
        border-bottom: 2px solid #333;
        color: #333;
        padding-bottom: 10px;
      }

      .donation-receipt h2::after {
        content: "";
        display: block;
        height: 2px;

      }

      .receipt-details {
        margin-bottom: 10px;
      }

      /* Animation */
      @keyframes fadeIn {
        from {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }

      .animated {
        animation-duration: 1s;
        animation-fill-mode: both;
      }

      .fadeIn {
        animation-name: fadeIn;
      }
      .hr1 {
       width: auto%;
       padding: 1rem;
       line-height: 1.5rem;
       border-top: 1px solid;
       border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
      }
      .form1{
        color:green;
      }
    </style>
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
        <h1 class="animated fadeIn">Donation Form</h1>
        <div class="hr1">
        <div class="form-container1 animated fadeIn">
          <center>
          <?php
              // Display donation receipt if form submitted successfully
            if ($displayDonationReceipt) {
             // Display receipt HTML here
             echo "<div class='form1'>Thank you for your donation.</div>";
             }
          ?></center>
          <form id="donation-form" method="post">
            <input
              type="text"
              name="donor-name"
              placeholder="Donor Name"
              required
            />
            <input
              type="number"
              name="donation-amount"
              placeholder="Donation Amount"
              min="1"
              step="any"
              required
            />
            <input
              type="tel"
              name="mobile-number"
              placeholder="Mobile Number"
              pattern="[0-9]{10}"
              required
            />
            <select name="donation-purpose" required>
              <option value="" selected disabled>
                Select Donation Purpose
              </option>
              <option value="shelter-support">Shelter Support</option>
              <option value="medical-care">Medical Care</option>
              <option value="feeding-programs">Feeding Programs</option>
              <option value="general-fund">General Fund</option>
              <!-- Add more options as needed -->
            </select>
            <button type="submit">Submit</button>
          </form>
        </div>

        <div class="donation-receipt animated fadeIn">
          <h2>Donation Receipt</h2>
          <div class="receipt-details">
            <p>
              <strong>Donor Name:</strong>
              <?php echo $donorName; ?>
            </p>
            <p>
              <strong>Donation Amount:</strong>
              <?php echo $donationAmount; ?>
            </p>
            <p>
              <strong>Mobile Number:</strong>
              <?php echo $mobileNumber; ?>
            </p>
            <p>
              <strong>Donation Purpose:</strong>
              <?php echo $donationPurpose; ?>
            </p>
          </div>
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
</html>

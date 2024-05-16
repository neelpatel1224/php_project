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

    <title>FAQs</title>
    <link rel="stylesheet" href="home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="faqs.css" />
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
    <!-- FAQ QUESTIONS -->
    <section class="bl">
      <br /><br />
      <center>
        <h2>Frequently Asked Questions</h2>
        <div class="hr1">
        <br />
        <p>
          We’ve compiled a list of commonly asked questions and answers below.
          <br />We hope it gives you all the information you need, but if
          there’s something that’s still not clear <br />just get in touch and
          we’ll do our best to help you.
        </p>
      </center>
      <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-item-header">
            What kind of pet health care services do you offer?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              We offer a vast array of pet health care services ranging from
              consultation, vaccinations, all kinds of treatments and surgery.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            How can I book an appointment?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              We do not give prior appointments for in-person consultations. But
              you can walk in any <strong>time </strong>between
              <strong>10:00 AM- 08:00 PM </strong> to our clinic with your pet
              and our vets and their team would love to receive you.
              <strong>Give us a call or send a WhatsApp text </strong> for all
              kinds of information and assistance. Our number is
              <strong> +91-8453019906.</strong>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">Where is your clinic located?</div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              We are located in Bamunimaidan, Guwahati city. Please check the
              contact page for complete address of our clinic.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Are you very expensive? How can I know the prices of your clinic?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              We have a very transparent pricing plan and all our services and
              treatments are pre-paid. There are no surprises what so ever and
              no treatment is administered without your consent. We totally
              respect your choices and we advice what is best for the pet Having
              said that please give us a call +91-84530 19906 to understand our
              prices before giving us a visit.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Do you offer online/phone/video consultation?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              We do offer Video Consultation to patients that live
              out-of-station or have difficulty traveling to a clinic You can
              book a video consultation appointment or know more about the
              process by calling up on +91-8453019906. Video consultation
              happens by prior appointment only and is helpful for quite a few
              pet health concerns. However, we do urge to rush your pet to the
              nearest clinic in the event of an accident or an emergency, and
              not wait for a video consultation session.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            What if I have to cancel/reschedule an appointment?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              At the moment we offer rescheduling only and cancellation of a
              Video Consultation appointment is not possible. Though we totally
              understand that you might need to reschedule appointments due to
              unforeseen circumstances. Just give us a call to reschedule. We
              will appreciate it if you can do so before 2 hours from your time
              of appointment.
            </div>
          </div>
        </div>
      </div>
      <?php
if (isset($_POST["submit"])) {
    $qus = $_POST["f_question"];

    require_once "database.php";
    $sql = "INSERT INTO `faq` (`faq_question`) VALUES (?)";
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
      <form action="" method="post">
        <div class="accordion-item-header1">Have any Questions?</div>
        <input type="text" placeholder="Enter Your Thoughts.." name="f_question"/>
        <input type="submit" value="Send" name="submit" class="s1">
      </form>
      <!-- faq ends -->
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
      <!-- footer end   from here -->
    </section>
  </body>
</html>
<script>
  const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
  );

  accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
      const currentlyActiveAccordionItemHeader = document.querySelector(
        ".accordion-item-header.active"
      );
      if (
        currentlyActiveAccordionItemHeader &&
        currentlyActiveAccordionItemHeader !== accordionItemHeader
      ) {
        currentlyActiveAccordionItemHeader.classList.toggle("active");
        currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
      }
      accordionItemHeader.classList.toggle("active");
      const accordionItemBody = accordionItemHeader.nextElementSibling;
      if (accordionItemHeader.classList.contains("active")) {
        accordionItemBody.style.maxHeight =
          accordionItemBody.scrollHeight + "px";
      } else {
        accordionItemBody.style.maxHeight = 0;
      }
    });
  });
</script>

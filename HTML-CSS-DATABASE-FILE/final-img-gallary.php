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
    <title>Document</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="icon" href="dog_logo.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="shortcut icon" href="images/dog_logo_1.ico" />
    <style>
      * {
        margin: 0px;
        padding: 0px;
        font-family: "Montserrat", sans-serif;
      }
      h1 {
        color: coral;
      }

      .grid-container {
        columns: 5 200px;
        column-gap: 1.5rem;
        width: 90%;
        margin: 0 auto;
      }

      .grid-container div {
        width: 150px;
        margin: 0 1.5rem 1.5rem 0;
        display: inline-block;
        width: 100%;
        border: solid 2px black;
        padding: 5px;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
        border-radius: 5px;
        transition: all 0.25s ease-in-out;
      }

      .grid-container div:hover img {
        filter: grayscale(0);
      }

      .grid-container div:hover {
        border-color: coral;
      }

      .grid-container div img {
        width: 100%;
        filter: grayscale(100%);
        border-radius: 5px;
        transition: all 0.25s ease-in-out;
      }

      .grid-container div p {
        margin: 5px 0;
        padding: 0;
        text-align: center;
        font-style: italic;
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
    <!-- header end here -->
    <br />
    <center><h1>The Purest of Dogs</h1></center>
    <br />
    <div class="grid-container">
      <div>
        <img
          class="grid-item grid-item-1"
          src="https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"I'm so happy today!"</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-2"
          src="https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"I see those nugs."</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-3"
          src="https://images.unsplash.com/photo-1510771463146-e89e6e86560e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"I love you so much!"</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-4"
          src="https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"I'm the baby of the house!"</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-5"
          src="https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"Are you gunna throw the ball?"</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-6"
          src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"C'mon friend!"</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-7"
          src="https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"A rose for mommy!"</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-8"
          src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"You gunna finish that?"</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-9"
          src="https://images.unsplash.com/photo-1535930891776-0c2dfb7fda1a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"We can't afford a cat!"</p>
      </div>
      <div>
        <img
          class="grid-item grid-item-10"
          src="https://images.unsplash.com/photo-1504595403659-9088ce801e29?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
          alt=""
        />
        <p>"Dis my fren!"</p>
      </div>
    </div>

    <!-- footer start   from here -->
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
  </body>
</html>

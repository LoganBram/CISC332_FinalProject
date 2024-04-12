<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Web Design Mastery | Holux</title>
  </head>
  <body>
  <?php
    include 'connectdb.php';
?>
    <nav>
      <div class="nav__bar">
        <div class="nav__logo"><a href="#">Real Estate</a></div>
        <ul class="nav__links">
          <li class="link"><a href="rental.php">HOME</a></li>
          <li class="link"><a href="Joingroup.php">JOIN GROUP</a></li>
          <li class="link"><a href="group_prefs.php">GROUP PREFERENCES</a></li>
          
        </ul>
        <div class="nav__btns">
          <button class="btn btn__primary">Log In</button>
          <button class="btn btn__secondary">Register Now</button>
        </div>
      </div>
    </nav>

    <header class="header">
      <div class="header__container">
        <div class="header__content">
          <h1>Find the perfect rental home for school</h1>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          </p>
          <div class="header__btns">
            <button class="btn btn__secondary">Join Group</button>
            
          </div>
        </div>
        <div class="header__image">
          <img src="images/FrontpageHeader.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="images/aboutus.jpg" alt="about" />
      </div>
      <div class="about__content">
        <h3>ABOUT US</h3>
        <h2 class="section__header">
          Lowest Prices for the Best Rentals
        </h2>
        <p class="section__subheader">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </p>
        <div class="about__grid">
        <table>
            <tr><th>House</th><th>Apartment</th><th>Room</th></tr>
            <tr><td>$234</td><td>$234</td><td>$234</td></tr>
        <!-- SELECT AVG(cost) FROM `property` WHERE type = 'House';  ?-->
        <!-- SELECT AVG(cost) FROM `property` WHERE type = 'Apartment'; ? -->
        <!-- SELECT AVG(cost) FROM `property` WHERE type = 'Room';  ?-->
        </table>
          </div>
        </div>
      </div>
    </section>
<div class="property-container">
    <?php 
    include 'cards_assist.php';
    ?>
</div>
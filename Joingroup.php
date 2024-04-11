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
          <li class="link"><a href="rental2.php">HOME</a></li>
          <li class="link"><a href="Joingroup.php">JOIN GROUP</a></li>
          <li class="link"><a href="#project">PLACEHOLDER</a></li>
          
        </ul>
        <div class="nav__btns">
          <button class="btn btn__primary">Log In</button>
          <button class="btn btn__secondary">Register Now</button>
        </div>
      </div>

      <div class="mini-header">
        <h1>Rental Groups</h1>
      </div>


    <div class="rentalgroup-wrap">
        <?php
        include 'showmembers.php';

        ?>
    </div>
    

</nav>
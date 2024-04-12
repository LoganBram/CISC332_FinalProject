<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="stylesss.css" />
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
          <li class="link"><a href="Joingroup.php">RENTAL GROUPS</a></li>
          <li class="link"><a href="#">MANAGERS</a></li>
          
        </ul>
        <div class="nav__btns">
          <button class="login">Log In</button>
          <button class="register">Register Now</button>
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
            
          <div class="averages__grid">
          <h1>Rent Averages</h1>
            <table>
                <tr><th>House</th><th>Apartment</th><th>Room</th></tr>
                <?php
            $queryHouse = "SELECT AVG(p.cost) AS avgHouseCost
            FROM Property p
            JOIN House h ON p.id = h.property_id;
            ";
            $queryApt = "SELECT AVG(p.cost) AS avgAptCost FROM Property p JOIN Apartment a ON p.id = a.property_id";
            $queryRoom = "SELECT AVG(p.cost) AS avgRoomCost FROM Property p JOIN Room r ON p.id = r.property_id";

            $resultHouse = $connection->query($queryHouse);
            $resultApt = $connection->query($queryApt);
            $resultRoom = $connection->query($queryRoom);
            $houseavg = round($resultHouse->fetch()['avgHouseCost']);
            $aptavg = round($resultApt->fetch()['avgAptCost']);
            $roomavg = round($resultRoom->fetch()['avgRoomCost']);
            
            echo "<tr><td>" . $houseavg . "</td><td>" . $aptavg . "</td><td>" . $roomavg . "</td></tr>";

        ?>
               
           
            </table>
          </div>
        </div>
      </div>
    </section>
<div class="property-container">
    <?php 
    include 'assist_propertycards.php';
    ?>
</div>
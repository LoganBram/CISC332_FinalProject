<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
<?php
    include 'connectdb.php';
?>
<nav class="navbar">
    <div class="navbar-section navbar-logo">
        <img src="logo.png" alt="Logo" style="height: 50px;"> <!-- Adjust the src to your logo's path -->
    </div>
    <div class="navbar-section navbar-links">
        <a href="#services">Home</a>
        <a href="#contact">Join-Group</a>
    </div>
    <div class="navbar-section navbar-auth">
        <a href="#login">Log In</a>
        <a href="#signup">Sign Up</a>
    </div>
</nav>

<div class="main-body">
    <div class = "title">
        <h1>Estate For Rent</h1>
    </div>
    <h1 class="averages-header">averages</h1>
    <div class="table-avg">
        <table>
            <tr><th>House</th><th>Apartment</th><th>Room</th></tr>
            <tr><td>$234</td><td>$234</td><td>$234</td></tr>
        <!-- SELECT AVG(cost) FROM `property` WHERE type = 'House';  ?-->
        <!-- SELECT AVG(cost) FROM `property` WHERE type = 'Apartment'; ? -->
        <!-- SELECT AVG(cost) FROM `property` WHERE type = 'Room';  ?-->


        </table>

    </div>
</div>
<div class='card-wrap'>
    <?php
    include 'cards.php';
    ?>
</div>


</body>
</html>

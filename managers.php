<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesss.css">
    <title>Document</title>
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
                <li class="link"><a href="managers.php">MANAGERS</a></li>
                
            </ul>
            <div class="nav__btns">
                <button class="login">Log In</button>
                <button class="register">Register Now</button>
            </div>
        </div>
    </nav>


    <div class="form-container">
        <h2>Assign Manager to Property</h2>
        <form action="submit_managerassignment.php" method="post">
            <div class="form-group">
                <label for="property">Property ID:</label>
                <select name="property" id="property">
                    <?php
                    include 'connectdb.php';  // Ensure your DB connection file is correctly referenced
                    $stmt = $connection->query("SELECT id, street FROM Property WHERE manager_id IS NULL");
                    foreach ($stmt as $row) {
                        echo "<option value='{$row['id']}'>{$row['id']} - {$row['street']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="manager">Manager:</label>
                <select name="manager" id="manager">
                    <?php
                    $stmt = $connection->query("SELECT id, fname, lname FROM Manager");
                    foreach ($stmt as $row) {
                        echo "<option value='{$row['id']}'>{$row['fname']} {$row['lname']}</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn">Assign Manager</button>
        </form>
    </div>

    
</body>
</html>
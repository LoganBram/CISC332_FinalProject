<?php
    // Assuming $connection is your PDO database connection
    include 'connectdb.php';
    // Receive preferences data from POST
    $groupId = $_POST["group-id"];
    $bedrooms = $_POST["bedrooms"];
    $bathrooms = $_POST["bathrooms"];
    $parking = $_POST["parking"];
    $laundry = $_POST["laundry"];
    $cost = $_POST["cost"];
    $accessibility = $_POST["accessibility"];
    $type = $_POST["type"];

    // Create a query to update the RentalGroup
    $query = 'UPDATE RentalGroup SET 
              bedrooms="' . $bedrooms . '",
              bathrooms="' . $bathrooms . '",
              parking="' . $parking . '",
              laundry="' . $laundry . '",
              cost=' . $cost . ',
              accessibility="' . $accessibility . '",
              accom_type="' . $type . '" 
              WHERE code="' . $groupId . '"';

    // Execute the query
    $numRows = $connection->exec($query);

    // Check if the update was successful
    if ($numRows > 0) {
        echo "Preferences updated successfully!";
    } else {
        echo "No changes were made or group not found.";
    }

    // Close the connection
    $connection = null;
?>

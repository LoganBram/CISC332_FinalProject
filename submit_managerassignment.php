<?php
include 'connectdb.php';


$manager = $_POST['manager'];
$property = $_POST['property'];


$query = "UPDATE Property SET manager_id = '$manager' WHERE id = '$property'";


try {
    $result = $connection->exec($query);
    if ($result) {
        echo "Manager assigned to property successfully!";
        echo "<br><a href='rental.php'>Back to Home</a>";
    } else {
        echo "Failed to assign manager to property or no changes made.";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

// Close the connection
$connection = null;
?>

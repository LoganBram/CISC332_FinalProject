<?php
// Assuming $connection is your PDO database connection established via 'connectdb.php'
include 'connectdb.php';

// Retrieve data from form
$phoneNumber = $_POST['phonenumber'];
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$studentId = $_POST['studentid'];
$graduationDate = $_POST['graduation'];
$program = $_POST['program'];
$groupId = $_POST['groupID'];

// Prepare the SQL statement to insert or update the renter information
$query = "INSERT INTO Renter (id, pnumber, fname, lname, sid, graduation, program, groupID) 
          VALUES ('$studentId', '$phoneNumber', '$firstName', '$lastName', '$studentId', '$graduationDate', '$program', '$groupId') 
          ON DUPLICATE KEY UPDATE 
          pnumber='$phoneNumber', fname='$firstName', lname='$lastName', graduation='$graduationDate', program='$program', groupID='$groupId'";

// Execute the query
try {
    $result = $connection->exec($query);
    if ($result) {
        echo "You have successfully joined the group!";
        echo "<br><a href='Joingroup.php'>Back to Groups</a>";
    } else {
        echo "Failed to join the group or no changes made.";
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

// Close the connection
$connection = null;
?>

<?php
// Assuming $connection is your PDO database connection
try{
// Fetch all groups with their preferences
$groupQuery = "SELECT code, bedrooms, bathrooms, parking, laundry, cost, accessibility, accom_type FROM RentalGroup";
$groups = $connection->query($groupQuery);

foreach ($groups as $group) {
    echo "<div class='rental-group'>";
    echo "<h2>Group " . $group['code'] . "</h2>"; // Dynamically displaying the group code
    echo "<div class='group-info'>";

    // Preferences section with delete button for each preference
    echo "<div class='preferences'><strong>Preferences:</strong>";
    echo "<div class='preference-items'>";
    echo "<div class='preference-item'>Bedrooms: " . $group['bedrooms'] . "</div>";
    echo "<div class='preference-item'>Bathrooms: " . $group['bathrooms'] . "</div>";
    echo "<div class='preference-item'>Parking: " . ($group['parking'] ? 'Yes' : 'No') . "</div>";
    echo "<div class='preference-item'>Laundry: " . $group['laundry'] . "</div>";
    echo "<div class='preference-item'>Cost: $" . $group['cost'] . "</div>";
    echo "<div class='preference-item'>Accessibility: " . ($group['accessibility'] ? 'Yes' : 'No') . "</div>";
    echo "<div class='preference-item'>Type: " . $group['accom_type'] . "</div>";
    echo "</div>"; // Close preference-items
    echo "</div>"; // Close preferences

    // Members section with button for adding more members
    echo "<div class='members'><strong>Members:</strong>";
    $memberQuery = "SELECT fname, lname FROM Renter WHERE groupID = '" . $group['code'] . "'";
    $members = $connection->query($memberQuery);

    foreach ($members as $member) {
        echo "<span>" . " " . $member['fname'] . " " . $member['lname'] . "," . "</span>";
    }

    echo "</div>";

    // Group actions with dynamically generated form
    echo "<div class='group-actions'>";
    echo "<form action='group-prefs-form.php' method='post'>";
        echo "<input type='hidden' name='groupID' value='" . $group['code'] . "'>";
        echo "<button type='submit' class='edit-preference-btn'>Edit Preferences</button>";
    echo "</form>";
    echo "<form action = 'join-group-form.php' method = 'post'>";
        echo "<input type='hidden' name='groupID' value='" . $group['code'] . "'>";
        echo "<button type='submit' class='join-group-btn'>Join Group</button>";
    echo "</form>";
    echo "</div>"; // Close group-actions
    echo "</div>"; // Close group-info
    echo "</div>"; // Close rental-group div  
}
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>


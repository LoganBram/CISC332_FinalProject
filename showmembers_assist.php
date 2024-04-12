<?php
// Assuming $connection is your PDO database connection

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
    echo "<div class='preference-item'>Bedrooms: " . $group['bedrooms'] . "<span class='delete-btn'>&#215;</span></div>";
    echo "<div class='preference-item'>Bathrooms: " . $group['bathrooms'] . "<span class='delete-btn'>&#215;</span></div>";
    echo "<div class='preference-item'>Parking: " . ($group['parking'] ? 'Yes' : 'No') . "<span class='delete-btn'>&#215;</span></div>";
    echo "<div class='preference-item'>Laundry: " . $group['laundry'] . "<span class='delete-btn'>&#215;</span></div>";
    echo "<div class='preference-item'>Cost: $" . $group['cost'] . "<span class='delete-btn'>&#215;</span></div>";
    echo "<div class='preference-item'>Accessibility: " . ($group['accessibility'] ? 'Yes' : 'No') . "<span class='delete-btn'>&#215;</span></div>";
    echo "<div class='preference-item'>Type: " . $group['accom_type'] . "<span class='delete-btn'>&#215;</span></div>";
    echo "</div>"; // Close preference-items
    echo "</div>"; // Close preferences

    // Members section with button for adding more members
    echo "<div class='members'><strong>Members:</strong>";
    $memberQuery = "SELECT fname, lname FROM Renter WHERE groupID = '" . $group['code'] . "'";
    $members = $connection->query($memberQuery);

    foreach ($members as $member) {
        echo "<span>" . $member['fname'] . " " . $member['lname'] . "," . "</span>";
    }

    echo "</div>";

    // Group actions with dynamically generated form
    echo "<div class='group-actions'>";
    echo "<form action='group_prefs.php' method='post'>";
    echo "<input type='hidden' name='groupID' value='" . $group['code'] . "'>";
    echo "<button type='submit' class='edit-preferences-btn'>Edit Preferences</button>";
    echo "</form>";
    echo "<button class='join-group-btn'>Join Group</button>";
    echo "</div>"; // Close group-actions
    echo "</div>"; // Close group-info
    echo "</div>"; // Close rental-group div
}
?>


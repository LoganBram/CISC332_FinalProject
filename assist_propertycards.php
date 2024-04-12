<?php
try{
  $query = "SELECT 
  Property.id AS PropertyID, 
  Property.cost AS Price,  -- Fetching the direct cost from Property table
  Owner.fname AS OwnerFirstName, 
  Owner.lname AS OwnerLastName, 
  Manager.fname AS ManagerFirstName, 
  Manager.lname AS ManagerLastName
  FROM Property
  LEFT JOIN Owns ON Property.id = Owns.propertyID
  LEFT JOIN Owner ON Owns.ownerID = Owner.id
  LEFT JOIN Manager ON Property.manager_id = Manager.id;

    ";

  $result = $connection->query($query);

  foreach ($result as $property) {
      echo '<div class="property-card">';
      echo '<img src="images/aboutus.jpg" alt="Property Image" class="property-image">';
      echo '<div class="property-details">';
      echo "<h2>Property ID: " . $property['PropertyID'] . "</h2>";
      echo "<p><strong>Price:</strong> $" . $property['Price'] . "</p>";
      echo "<p><strong>Owner:</strong> " . $property['OwnerFirstName'] . " " . $property['OwnerLastName'] . "</p>";
      echo "<p><strong>Manager:</strong> " . $property['ManagerFirstName'] . " " . $property['ManagerLastName'] . "</p>";
      echo '</div></div>';
  }
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
//close connecion
$connection = null;
?>


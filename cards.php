<?php


$query = "SELECT * FROM property";
$result = $connection->query($query);

foreach ($result as $person) {
  echo "<div class=\"card\">";
  echo "<img src=\"images/image.png\" alt=\"Avatar\" >";
  echo "<div class=\"container\">";
    echo "<h1><b> $ {$person['cost']}</b></h1>"; 
    echo "<h2>{$person['id']}</h2>"; 
    echo "<h3>Owner: {$person['owner']}</h3>"; 
    echo "<h4>Manager: {$person['manager']}</h4>";
    echo "<h5> House avg: $200 </h5>";
  echo "</div></div>";
}
?>
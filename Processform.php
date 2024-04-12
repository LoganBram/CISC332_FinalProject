<!DOCTYPE html>
<html>
<body>
<h2>Employee Information</h2>
<?php
    $givenName = $_POST['firstname']; #firstname is the name of the element in form
    $surname = $_POST['lastname'];
    echo '<p>'.$givenName.' '.$surname.'</p>';
?>
</body>
</html>


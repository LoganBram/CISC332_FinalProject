<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesss.css">
    <title>Update Preferences</title>
</head>
<body>
    <?php
    include 'connectdb.php';
?>
    <?php
        // Default the group ID to an empty string if it's not set
        $groupID =$_POST['groupID'];
    ?>
    <div class="preferences-form-container">
        <form action="submit_preferences.php" method="post" class="preferences-update-form">
            <h2>Update Your Preferences</h2>
            <div class="preferences-input-group">
                <label for="group-id">Group ID:</label>
                <input type="text" id="group-id" name="group-id" class="preferences-text-input" value="<?php echo ($groupID); ?>">
            </div>
            <div class="preferences-input-group">
                <label for="bedrooms">Bedrooms:</label>
                <input type="text" id="bedrooms" name="bedrooms" class="preferences-text-input">
            </div>
            <div class="preferences-input-group">
                <label for="bathrooms">Bathrooms:</label>
                <input type="text" id="bathrooms" name="bathrooms" class="preferences-text-input">
            </div>
            <div class="preferences-input-group">
                <label for="parking">Parking:</label>
                <input type="text" id="parking" name="parking" class="preferences-text-input">
            </div>
            <div class="preferences-input-group">
                <label for="laundry">Laundry:</label>
                <input type="text" id="laundry" name="laundry" class="preferences-text-input">
            </div>
            <div class="preferences-input-group">
                <label for="cost">Cost ($):</label>
                <input type="text" id="cost" name="cost" class="preferences-text-input">
            </div>
            <div class="preferences-input-group">
                <label for="accessibility">Accessibility:</label>
                <input type="text" id="accessibility" name="accessibility" class="preferences-text-input">
            </div>
            <div class="preferences-input-group">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" class="preferences-text-input">
            </div>
            <button type="submit" class="preferences-submit-btn">Update Preferences</button>
        </form>
    </div>
</body>
</html>



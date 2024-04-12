<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="joingroup-page.css">
    <title>Join Group</title>
</head>
<body>
    <div class="join-group-container">
        <form action="submit_joingroup.php" method="post" class="join-group-form">
            <h2>Join Group</h2>
            <div class="input-group">
                <label for="phonenumber">Phone Number:</label>
                <input type="text" id="phonenumber" name="phonenumber" required>
            </div>
            <div class="input-group">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="input-group">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="input-group">
                <label for="studentid">Student ID:</label>
                <input type="text" id="studentid" name="studentid" required>
            </div>
            <div class="input-group">
                <label for="graduation">Graduation Date:</label>
                <input type="date" id="graduation" name="graduation" required>
            </div>
            <div class="input-group">
                <label for="program">Program:</label>
                <input type="text" id="program" name="program" required>
            </div>
            <!-- Hidden field for passing group ID -->
            <input type="hidden" id="groupID" name="groupID" value="<?php echo isset($_POST['groupID']) ? htmlspecialchars($_POST['groupID']) : ''; ?>">

            <button type="submit" class="submit-btn">Join Group</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/update.css">
    <title>Update</title>
</head>
<body>
<header class="header">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="view.php">View List</a>
        </nav>
    </header>
    <div class="card">
        <h2>UPDATE</h2>
        <form method = "POST" id="studentForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="ID">Previous ID:</label>
            <input type="text" name="ID" id="ID" required>

            <label for="ID">New ID:</label>
            <input type="text" name="newID" id="newID" required>

            <label for="firstName">First Name:</label>
            <input type="text" id="First_Name" name="First_Name" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="Last_Name" name="Last_Name" required>

            <label for="age">Age:</label>
            <input type="text" id="Age" name="Age" required>

            <label for="address">Address:</label>
            <input type="text" id="Address" name="Address" required>

            <label for="contactNumber">Contact Number:</label>
            <input type="text" id="Contact_Number" name="Contact_Number" required>

            <label for="Job_Description">Job Description:</label>
            <input type="text" id="Job_Description" name="Job_Description" required>

            <label for="Salary">Salary:</label>
            <input type="text" id="Salary" name="Salary" required>
            <br>
            <input type="hidden" name="action" value="update">
            <button type="submit" value="submit">Update</button>
        </form>
    </div>
    <?php
    // Include common functions and connect to the database
    include 'common.php';
    $conn = connectToDatabase();

    // Handle form submissions
    handleFormSubmissionEmployee($conn);

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
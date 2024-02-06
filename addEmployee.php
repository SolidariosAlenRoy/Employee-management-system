<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/addteacher.css">
    <title>Attendance</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="viewEmployee.php">View List</a>
        </nav>
    </header>
    <div class="card">
        <h2>Add Teacher</h2>
        <form method = "post" id="teacherForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="teacherID">Teacher ID:</label>
            <input type="text" id="ID" name="ID" required>

            <label for="teacherName">Teacher First Name:</label>
            <input type="text" id="First_Name" name="First_Name" required>

            <label for="teacherName">Teacher Middle Name:</label>
            <input type="text" id="Middle_Name" name="Middle_Name" required>

            <label for="teacherName">Teacher Last Name:</label>
            <input type="text" id="Last_Name" name="Last_Name" required>

            <label for="Job_Description">Job Description:</label>
            <select name="Job_Description" id="Job_Description">
                 <option value="Full Time">Full Time</option>
                 <option value="Part Time">Part Time</option>
                 <option value="Faculty">Faculty</option>
             </select>
            <br>
            <input type="hidden" name="action" value="update">
            <button type="submit" value="submit">Submit</button>
        </form>
    </div>
    <?php
    // Include common functions and connect to the database
    include 'common.php';
    $conn = connectToDatabase();

    // Handle form submissions
    handleFormSubmissionteacher($conn);

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
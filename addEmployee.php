<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/addteacher.css">
    <title>Add Employee</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="viewEmployee.php">View List</a>
        </nav>
    </header>
    <div class="card">
        <h2>Add Employee</h2>
        <form method = "post" id="employeeForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="employeeID">Teacher ID:</label>
            <input type="text" id="ID" name="ID" required>

            <label for="employeeName">Employee First Name:</label>
            <input type="text" id="First_Name" name="First_Name" required>

            <label for="EmployeeName">Employee Middle Name:</label>
            <input type="text" id="Middle_Name" name="Middle_Name" required>

            <label for="employeeName">Employee Last Name:</label>
            <input type="text" id="Last_Name" name="Last_Name" required>

            <label for="Job_Description">Job Description:</label>
            
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
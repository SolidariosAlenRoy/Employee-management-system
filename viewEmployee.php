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
            <a href="addEmployee.php">Add Employee</a>
        </nav>
    </header>

    <?php
    // Include common functions and connect to the database
    include 'common.php';
    $conn = connectToDatabase();

    // Handle The display of data
    displayEmployeeData($conn);

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
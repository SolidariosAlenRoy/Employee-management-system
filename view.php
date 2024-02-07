<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/addteacher.css">
    <title>Attendance</title>
</head>
<style>
    body {
  font-family: "Lato", sans-serif;
  background-color: #f4eee1;
}

header {
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    align-items: center;
    padding: 10px 20px;
    z-index: 99;
    background-color: rgb(174, 161, 146);
}

.nav a {
    text-decoration: none;
    color: #fff;
    margin-left: 20px;
    font-weight: bold;
    transition: color 0.3s;
}

.nav a:hover {
    color: rgb(160, 143, 120); 
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}



</style>
<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="addEmployee.php">Add Employee</a>
        </nav>
    </header>
    <br>
    <br>
    <?php
    // Include common functions and connect to the database
    include 'common.php';
    $conn = connectToDatabase();

    // Handle The display of data
    displayEmployeeData($conn);

    //Handle Form Submission
    handleFormSubmissionEmployee($conn);

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
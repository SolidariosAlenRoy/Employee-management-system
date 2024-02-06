<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        .nav {
            display: flex;
            justify-content: space-around;
            padding: 1em;
        }

        .nav a {
            text-decoration: none;
            color: white;
        }

        .card {
            width: 50%;
            margin: 2em auto;
            background-color: grey;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            display: grid;
            grid-gap: 1em;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 0.5em;
            box-sizing: border-box;
        }

        button {
            background-color: #0f0;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
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
        <form method="post" id="employeeForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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

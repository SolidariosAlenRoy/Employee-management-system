<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/addEmployee.css">
    <title>Add Employee</title>
</head> 
    <style>
        
        body {
            font-family: "Lato", sans-serif;
            background-color: #f4eee1;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 1em;
        }

        .nav {
            display: flex;
            justify-content: space-around;
            padding: 1em;
        }

        .nav a {
            color: #fff;
            text-decoration: none;

            margin: 0 250px;
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
            <a href="view.php">View List</a>
        </nav>
    </header>
    
    <div class="card">
        <h2>Add Employee</h2>
<<<<<<< HEAD:addEmployee.php
        <form method="post" id="employeeForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
=======
        <form method="post" id="employeeForm">
>>>>>>> 0b007baa519c1c3fe07946c9cffb321be2e9182d:add.php
            <label for="employeeID">Employee ID:</label>
            <input type="text" id="ID" name="ID" required>

            <label for="employeeName">First Name:</label>
            <input type="text" id="First_Name" name="First_Name" required>

<<<<<<< HEAD:addEmployee.php
            <label for="EmployeeName">Last Name:</label>
=======
            <label for="employeeName">Employee Middle Name:</label>
>>>>>>> 0b007baa519c1c3fe07946c9cffb321be2e9182d:add.php
            <input type="text" id="Middle_Name" name="Middle_Name" required>

            <label for="employeeName">Age:</label>
            <input type="text" id="Last_Name" name="Last_Name" required>

            <label for="employeeName">Address:</label>
            <input type="text" id="Last_Name" name="Last_Name" required>

            <label for="employeeName">Contact Number:</label>
            <input type="text" id="Last_Name" name="Last_Name" required>

<<<<<<< HEAD:addEmployee.php
            <label for="Job_Description">Job Description:</label>
            <input type="text" id="Job_Description" name="Job_Description" required>
=======
            <label for="AGE">Age:</label>
            <input type="text" id="Age" name="Age" required>
>>>>>>> 0b007baa519c1c3fe07946c9cffb321be2e9182d:add.php

            <label for="Contact Number">Contact Number:</label>
            <input type="text" id="Contact_Number" name="Contact_Number" required>

            <label for="Job_Description">Job Description:</label>
            <input type="text" id="Job_Description" name="Job_Description" required>

            <label for="Address">Adress:</label>
            <input type="text" id="Address" name="Address" required>

            <label for="Salary">Salary:</label>
            <input type="text" id="Salary" name="Salary" required>
            <br>
            <input type="hidden" name="action" value="insert">
            <button type="submit" value="submit">Submit</button>
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

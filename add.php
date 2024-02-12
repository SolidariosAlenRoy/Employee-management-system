<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/add.css">
    <title>Add Employee</title>
</head> 
    <style>
        
        body {
            font-family: "Lato", sans-serif;
            font-weight: bold;
            background-image: url(collage.png);
            background-size: cover;
            padding: 0;
            margin: 1;
        }
        
        .container {
            width: 90%; 
            margin: 0 auto; 
            padding: 20px; 
            background-color: #333;
            border-radius: 10px;  
            color: white; 
            position: relative; 
            overflow: visible; 
        }

        .nav {
            display: flex;
            justify-content: center;
        }

        .nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px; 
        }

        .nav a:hover {
            text-decoration: underline;
        }

        .header-glowing::before,
        .card::before {
            content: '';
            position: absolute;
            left: -2px;
            top: -2px;
            background: linear-gradient(45deg, #e8f74d, #ff6600d9, #00ff66, #13ff13, #ad27ad, #bd2681, #6512b9, #ff3300de, #5aabde);
            background-size: 400%;
            width: calc(100% + 5px);
            height: calc(100% + 5px);
            z-index: -1;
            animation: glower 20s linear infinite;
            border-radius: 10px; 
        }

        @keyframes glower {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .card {
            width: 70%;
            margin: 2em auto;
            background-color: #22211a;
            color: white;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative; 
            overflow: visible; 
        }

        .card::before {
            content: '';
            position: absolute;
            left: -2px;
            top: -2px;
            background: linear-gradient(45deg, #e8f74d, #ff6600d9, #00ff66, #13ff13, #ad27ad, #bd2681, #6512b9, #ff3300de, #5aabde);
            background-size: 400%;
            width: calc(100% + 5px);
            height: calc(100% + 5px);
            z-index: -1;
            animation: glower 20s linear infinite;
        
        }

        form {
            display: grid;
            grid-gap: 1em;
        }
        h2{
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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
            width: 100px;
            height: 50px;
            background-color: #555;
            color: white;
            font-weight: bold;
            font-size: 16px;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            
        }

        button:hover {
            background-color: #333227;
        }
    </style>
</head>
<body>

<div class="container">
    <header class="header-glowing">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="view.php">VIEW LIST</a>
        </nav>
    </header>
</div>
<div class="card">
        <h2>ADD EMPLOYEE</h2>
        <form method="post" id="employeeForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <form method="post" id="employeeForm">

            <label for="employeeID">Employee ID:</label>
            <input type="text" id="ID" name="ID" required>

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

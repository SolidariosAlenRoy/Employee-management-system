<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/addteacher.css">
    <title>View List</title>
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-color: white;
        }

        .container {
            width: 95%; 
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
            padding: 10px 290px; 
        }

        .nav a:hover {
            text-decoration: underline;
        }

        .header-glowing::before {
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
            width: 50%;
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
    </style>
</head>
<body>
<div class="container">
<header class="header-glowing">
    <nav class="nav">
        <a href="index.php">HOME</a>
        <a href="add.php">Add Employee</a>
    </nav>
</header>
</div>
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
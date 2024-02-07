<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/addteacher.css">
    <title>View List</title>
</head>
    <style>
            body {
            font-family: "Lato", sans-serif;
            background-color: #f4eee1;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 1em;
        }
        .nav {
            display: flex;
            justify-content: center;
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            padding: 1em;
            margin: 0 290px;
        }
        .nav a:hover {
            text-decoration: underline;
        }

    </style>
<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="add.php">Add Employee</a>
        </nav>
    </header>
    <br>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Job Description</th> 
      <th scope="col">Address</th>  
    </tr>
  </thead>
  
</table>

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
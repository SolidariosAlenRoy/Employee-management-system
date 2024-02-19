<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/update.css">
    <title>Update</title>
</head>

<body>
<div class="container">
    <header class="header-glowing">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="view.php">View List</a>
        </nav>
    </header>
</div>
    <div class="card">
        <h2>UPDATE</h2>
        <form method="POST" id="studentForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
           <label for="ID">Previous ID:</label>
           <input type="text" name="ID" id="ID" required>

           <label for="newID">New ID:</label>
           <input type="text" id="newID" name="newID" required>

           <label for="First_Name">First Name:</label>
           <input type="text" id="First_Name" name="First_Name" required>

           <label for="Last_Name">Last Name:</label>
           <input type="text" id="Last_Name" name="Last_Name" required>

           <label for="Age">Age:</label>
           <input type="text" id="Age" name="Age" required>

           <label for="Address">Address:</label>
           <input type="text" id="Address" name="Address" required>

           <label for="Contact_Number">Contact Number:</label>
           <input type="text" id="Contact_Number" name="Contact_Number" required>

           <label for="Job_Description">Job Description:</label>
           <input type="text" id="Job_Description" name="Job_Description" required>

           <label for="Salary">Salary:</label>
           <input type="text" id="Salary" name="Salary" required>
           <br>
           <input type="hidden" name="action" value="update">
           <button type="submit">Submit</button>
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
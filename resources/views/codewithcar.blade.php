<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $employeeID = htmlspecialchars($_POST['employeeID']);

    // Here you can save data to a database, or send an email, etc.
    // For now, we'll just display the collected data.
    echo "<h3>Staff Registration Successful</h3>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #AAB99A;
        }
        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 6px;
            display: block;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="date"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #AAB99A;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #8b9e75;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Staff Registration Form</h2>
    <form action="" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="employeeID">Employee ID</label>
        <input type="text" id="employeeID" name="employeeID" required>

      
    

        <button type="submit">Register</button>
    </form>
</div>

<div class="footer">
    <p>&copy; 2025 Hotel Management System. All rights reserved.</p>
</div>

</body>
</html>

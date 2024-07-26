<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<header>
    <nav>
        <a href="Home">Home</a>
        <a href="login.php">login</a>
        <a href="test.php">Test</a>
    </nav>
</header>

<body>
    <form action="signup.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required>   <br>


    <label for="confirmPassword">Confirm Password:</label><br>
    <input type="password" id="confirmPassword" name="confirmPassword" required><br>

    <label for="firstName">First Name:</label><br>
    <input type="text" id="firstName" name="firstName"><br>

    <label for="lastName">Last Name:</label><br>
    <input type="text" id="lastName" name="lastName"><br>

    <label for="username">Username:</label>   <br>

    <input type="text" id="username" name="username"><br>

    <label for="phoneNumber">Phone Number:</label><br>
    <input type="tel" id="phoneNumber" name="phoneNumber"><br>

    <label for="dateOfBirth">Date of Birth:</label><br>
    <input type="date" id="dateOfBirth" name="dateOfBirth">  <br> 


    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address">   <br>

    <input type="submit">
    </form>
</body>
</html>
<?php 
    $email = $_POST["email"];
    $firstName = $_POST["firstName"];

    echo "hello {$firstName}"
?>
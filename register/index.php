<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration-form">
        <h1>Registration Form</h1>

        <form action="connect.php" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" id="fullname" placeholder="Enter fullname" required /><br><br>

            <label for="username">User Name:</label>
            <input type="text" name="username" id="username" placeholder="Enter username" required/><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email"placeholder="Enter Email" required /><br><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password"  required/><br><br>

            <input type="submit" value="Register Now" name="register" id="register">
        </form>
    </div>
</body>
</html>
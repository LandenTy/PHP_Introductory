<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media=”screen” />
    <title>Account Registration</title>
</head>
<body bgcolor="#74B9FF">
    <div><h2>Register an Account:</h2></div>
    <form action='connection.php' method="POST">
        
        <label for="email">Email Address: *</label><br>
        <input type='email' class="emailField" name='email' id='email' required/><br><br>

        <label for="name">Username: *</label><br>
        <input type='text' class="nameField" name='name' id='name' required/><br><br>

        <label for="password">Password: *</label><br>
        <input type='password' class="passwordField" name='password' id='password' required/><br><br>

        <button type='submit' class="submit" name='submit' id="submit">Submit</button>
    </form>
</body>
</html>
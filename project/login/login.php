<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="create.php" method="post">
      <label for="username">Username:</label> 
      <input id="username" name="username" type="text"/><br>
      <label for="password">Password:</label>
      <input id="password" name="password" required="" type="password" /><br>
      <input name="register" type="submit" value="Register" />
    </form>
    
    
<?php
session_start();

if (isset($_POST['login'])) {
    $host = 'your_host';
    $username = 'your_username';
    $password = 'your_password';
    $database = 'your_database';

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);


    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); 
    } else {
        echo "Invalid username or password";
    }

    $conn->close();
} else {
    header('Location: create.php');
}
?>
</body>
</html>
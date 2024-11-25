<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $users = file("users.txt", FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($storedUsername, $storedPassword) = explode(",", $user);
            if ($username == $storedUsername && password_verify($password, $storedPassword)) {
                $_SESSION['username'] = $username;
                header("Location: home.php");
                exit();
            }
        }
        echo "Invalid username or password!";
    } else {
        echo "Please fill in both fields!";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <form method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
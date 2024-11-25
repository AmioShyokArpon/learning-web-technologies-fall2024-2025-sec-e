?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $file = fopen("users.txt", "a+");
        $existingUsers = file_get_contents("users.txt");

        if (strpos($existingUsers, $username . ",") === false) {
            fwrite($file, $username . "," . password_hash($password, PASSWORD_DEFAULT) . "\n");
            fclose($file);
            echo "Registration successful. <a href='login.php'>Login here</a>";
        } else {
            echo "Username already exists!";
        }
    } else {
        echo "Please fill in both fields!";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Registration</title></head>
<body>
    <h2>Registration</h2>
    <form method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
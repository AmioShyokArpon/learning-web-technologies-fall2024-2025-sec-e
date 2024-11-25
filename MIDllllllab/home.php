<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Home</title></head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>You are logged in successfully.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
Logout
<?php
session_start();
session_destroy();
header("Location: login.php");
exit();
?>
<?php
session_start();
$host = 'localhost'; 
$db = 'news_management';
$user = 'root'; 
$pass = ''; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];
    
    if ($row['role'] == 'admin') {
        header("Location: pages/admin_page/admin_page.php");
    } else {
        header("Location: pages/home_page/home.php");
    }
} else {
    echo "<script>
            alert('Invalid username or password.!');
        </script>";
}

$conn->close();
?>

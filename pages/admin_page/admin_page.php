<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    echo "Access denied!";
    exit();
}

$host = 'localhost';
$db = 'news_management';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS total_articles FROM articles"; 
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc(); 
    $total_articles = $row['total_articles']; 
} else {
    $total_articles = 0; 
}

$conn->close(); 
?>

<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../css/admin_style.css">
</head>
<body>
    <div class="sidebar">
        <h2>AdminScope</h2>
        <ul>
            <li><a href="admin_page.php">Dashboard</a></li>
            <li><a href="add_article.php">Add Posts</a></li>
            <li><a href="manage_articles.php">Manage Posts</a></li> 
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="view_reports.php">View Reports</a></li>
            <li><a href="view_subscribers.php">View Subscribers</a></li>
        </ul>
        <div class="help">
            <h3>For Help?</h3>
            <p>Email: group08@gmail.com</p>
            <p>Phone: 0753800728</p>
            <a style="display: inline-block; padding: 8px 16px; background-color: red; color: white; text-align: center;
                        text-decoration: none; border-radius: 4px; font-weight: bold; margin-top: 25px;" href="../../logout.php">Logout</a>
        </div>
    </div>

    <div class="content">
        <header>
            <h2>Dashboard</h2>
            <p>Welcome Admin!</p>
        </header>
        <main>
            <section>
                <div class="dashboard-item" style="margin-right: 50px;">
                    <h3>Categories Listed</h3><br>
                    <h1><center>5</center></h1>
                </div>
                <div class="dashboard-item">
                    <h3>Live News</h3><br>
                    <h1><center><?= htmlspecialchars($total_articles) ?></center></h1> 
                </div>
            </section>
        </main>
    </div>
</body>
</html>

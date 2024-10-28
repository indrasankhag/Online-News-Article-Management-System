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

$sql = "SELECT name, email FROM subscribers";
$result = $conn->query($sql);
?>

<html>
<head>
    <title>View Subscribers</title>
    <link rel="stylesheet" href="../../css/admin_style.css">
    <style>
        table {
            margin: 0 auto; 
            border-collapse: collapse;
            width: 90%; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            background-color: #f9f9f9; 
        }

        th, td {
            text-align: center;
            padding: 12px 15px; 
            border: 1px solid #ddd; 
        }

        th {
            font-weight: bold;
            background-color: #f5a742; 
            color: white; 
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>AdminScope</h2>
        <ul>
            <li><a href="admin_page.php">Dashboard</a></li>
            <li><a href="manage_users.php">Add Posts</a></li>
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
            <h2><b>View Subscribers<br></h2>
        </header>
        <main>
            <br><br>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </main>
    </div>
</body>
</html>

<?php $conn->close(); ?>
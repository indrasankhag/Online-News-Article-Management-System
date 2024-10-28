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

if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    $conn->query($sql);
}

if (isset($_GET['delete_user'])) {
    $id = $_GET['delete_user'];
    $sql = "DELETE FROM users WHERE id = $id";
    $conn->query($sql);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<html>
<head>
    <title>Manage Users</title>
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
            <h2>Manage Users</h2>
            <p>ADD Users!</p>
        </header>
        <main>
            <section>
                <form method="POST">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <select name="role">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select><br>
                    <button type="submit" name="add_user">Add User</button>
                </form>
            </section>

            <header id="head2">
                <h2>Existing Users</h2>
                <p>Delete Users!</p>
            </header>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['role'] ?></td>
                    <td>
                    <a href="manage_users.php?delete_user=<?= htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') ?>" style="display: inline-block; padding: 8px 16px; background-color: red; color: white; text-align: center;text-decoration: none; border-radius: 4px; font-weight: bold;">Remove</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
        </main>
    </div>
</body>
</html>


<?php $conn->close(); ?>

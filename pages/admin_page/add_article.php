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

if (isset($_POST['add_article'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_SESSION['username'];
    $category_id = $_POST['categories'];

    $sql = "INSERT INTO articles (title, content, author, category_id, publish_date) VALUES ('$title', '$content', '$author', '$category_id', CURDATE())";
    $conn->query($sql);
}

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);
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
            <h2>Add Post</h2>
            <p>Add Your Article!</p>
        </header>
        <main>
            <section>
            <form method="POST">
                <label for="Category">Category: </label><select name="categories" required>
                    <option value="1">Sports</option>
                    <option value="2">Entertainment</option>
                    <option value="3">Politics</option>
                    <option value="4">Business</option>
                    <option value="5">Health</option>
                </select><br/>
                <label for="Title: ">Title: </label><input type="text" name="title" placeholder="Title" required><br/>
                <label for="Content: ">Content: </label><textarea name="content" placeholder="Content" required></textarea><br/>    
                <button type="submit" name="add_article">Add Article</button>
            </form>
            </section>
        </main>
    </div>
</body>
</html>


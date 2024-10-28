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

if (isset($_GET['delete_article'])) {
    $id = $_GET['delete_article'];
    $sql = "DELETE FROM articles WHERE id = $id";
    $conn->query($sql);
}

if (isset($_POST['article_id'])) {
    $article_id = $_POST['article_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];

    $sql = "UPDATE articles SET title='$title', content='$content', category_id='$category_id' WHERE id=$article_id";
    $conn->query($sql);
}

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);
?>

<html>
<head>
    <title>Manage Articles</title>
    <link rel="stylesheet" href="../../css/admin_style.css">
    <style>
        table {
            margin: 0 auto; 
            border-collapse: collapse;
            width: 90%; 
            background-color: #f9f9f9; 
        }
        th, td {
            text-align: center; 
            padding: 12px 15px; 
            border: 1px solid #ddd; 
        }
        th {
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
            <h2>Update Article</h2>
            <p>Manage Articles</p>
        </header>
        <main>
        <section>
            <form action="manage_articles.php" method="POST">
                <label for="article_id">Article ID:</label>
                <input type="number" name="article_id" required><br>

                <label for="title">New Title:</label>
                <input type="text" name="title" required><br>

                <label for="content">New Content:</label>
                <textarea name="content" required></textarea><br>

                <label for="Category">Category: </label><select name="category_id" required>
                    <option value="1">Sports</option>
                    <option value="2">Entertainment</option>
                    <option value="3">Politics</option>
                    <option value="4">Business</option>
                    <option value="5">Health</option>
                </select><br/>

                <button type="submit">Update Article</button><br>
            </form>
        </section>     
        
        <header>
            <h2>Existing Articles</h2>
            <p>Manage Articles</p>
        </header>       
        <section>
            <table>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['author'] ?></td>
                    <td><?= $row['publish_date'] ?></td>
                    <td>
                        <a href="manage_articles.php?delete_article=<?= $row['id'] ?>" style="display: inline-block; padding: 8px 16px; background-color: red; color: white; text-align: center;text-decoration: none; border-radius: 4px; font-weight: bold;">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>
        </section>
        </main>
    </div>
</body>
</html>

<?php $conn->close(); ?>

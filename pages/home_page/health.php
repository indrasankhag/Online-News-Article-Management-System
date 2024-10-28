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

$sql = "SELECT title, content, author, publish_date FROM articles";
$result = $conn->query($sql);

?>

<html>
    <head>
    <title>Home - News Management System</title>
    <link rel="stylesheet" href="../../css/style_home.css">
    </head>
    <body>
        <header>                                                
			<img class="logo" src="../../assets/images/logo.png" alt="Your Logo">
            <div class="navi">
                <a class="active" href="home.php">Home</a>                                 
                <a href="profile.php">Profile</a>
                <a href="subscription.php">Subscribe</a>
                <a href="aboutus.html">Help</a> 
                <span id="lout"><a href="../../logout.php">Logout</a></span>          
            </div>
		</header>
        <section>
            <nav>
              <h2>Categories</h2>
              <ul>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="entertainment.php">Entertainment</a></li>
                <li><a href="politics.php">Politics</a></li>
                <li><a href="buisness.php">Buisness</a></li>
                <li><a href="health.php">Health</a></li>
              </ul>
            </nav>
            
<article>
    <div class="container">
        <?php if (isset($_SESSION['username'])): ?>
	<h2 class="big-title">Latest Health News</h2>
            <?php 
                $sql = "SELECT * FROM articles WHERE category_id = 5";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0): ?>               
                <?php while ($row = $result->fetch_assoc()): ?>  
                    <h3><?= htmlspecialchars($row['title']) ?></h3>
                    <p><?= htmlspecialchars(substr($row['content'], 0, 10000000)) ?>...</p>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No Health news articles available.</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</article>
        </section>

        <footer>
            <div class="grid-container1">
                <div class="grid-item1">
                    <span id="foot">THE DAILY LEDGER</span><br><br>The Daily Ledger is your trusted source for timely,<br> accurate, and insightful news. 
                    We deliver the<br> latest headlines across a wide range of topics,<br> including world events, technology, business, and lifestyle,<br> ensuring you stay informed and 
                    ahead of<br> the curve. Our mission is to provide balanced<br> and credible reporting, giving you the facts that<br> matter. At The Daily Ledger, we believe in the<br> 
                    power of knowledge, and we're committed to bringing<br> you the stories that shape our world. Stay connected<br> with us for real-time updates and in-depth 
                    analysis.
                </div>
                <div class="grid-item1">
                    <span id="foot">CONTACT US</span><br><br>
                    <div class="contact-info">
                        <img src="../../assets/images/location.png" alt="Location" class="rounded-icon">31, Cross Road, Colombo 07, Sri Lanka<br>
                        <img src="../../assets/images/phone.png" alt="Phone" class="rounded-icon">+94 118416952<br>
                        <img src="../../assets/images/phone.png" alt="Phone" class="rounded-icon">+94 783631024<br>
                        <img src="../../assets/images/mail.png" alt="Mail" class="rounded-icon">dailyledger@gmail.com
                    </div>
                </div>
                <div class="social-media-container">
                    <div class="grid-item3"><span id="foot">SOCIAL MEDIA</span></div>        
                    <ul class="social-icons">
                        <li><a href="https://web.facebook.com/profile.php?id=61565900249007&is_tour_dismissed" target="_blank"><img src="../../assets/images/fb.jpg" alt="Facebook"></a></li>
                        <li><a href="https://x.com/LodgerDaily" target="_blank"><img src="../../assets/images/x.jpg" alt="Twitter"></a></li>
                        <li><a href="" target="_blank"><img src="../../assets/images/insta.jpg" alt="Instagram"></a></li>
                        <li><a href="" target="_blank"><img src="../../assets/images/tiktok.jpg" alt="Tik tok"></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>
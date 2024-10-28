<html>
    <head>
        <title>Subscription Page</title>
        <style>
            html, body {
                height:100%; 
                margin:0; 
                padding:0; 
                display:flex;
                flex-direction:column; 
            }
            header {
                position:-webkit-sticky; 
                position:sticky; 
                top:0; 
                z-index:1000; 
                background-color:white;
                display:flex;
                justify-content:space-between; 
                align-items:center; 
            }
            .logo{
                margin-top:0.36vw;
                width:7.99vw;
                height:6.39vw;
                margin-right:2.52vw;
            }
            .navi{
                background-color:#f3b16b;
                display:flex;
                align-items:center;
                width:155.99vw;
                margin-top:0.16vw;
            }
            .navi a{
                float:left;
                display:block; 
                color:rgb(29, 14, 1);
                text-align:center;
                padding:1.15vw 6.98vw;      
                cursor:pointer;
                font-size:1.25vw;
                text-decoration:none;
                font-family:'sfprodisplay-regular', 'Helvetica', 'Arial', sans-serif;
            }
            .navi a:hover{
                background-color:#f3a846;
                color:black;
            }
            #lout :hover{                  
                background-color:red;
                color:black;
            }
            .navi a.active{
                background-color:#ca8c3b;
                color:black;
            }
            .grid-container2{
                flex:1; 
                display:flex;
                grid-template-columns:auto auto;
                flex-wrap:wrap; 
                justify-content:center; 
                align-items:flex-start; 
                padding:3vw 4.09vw;
                gap:2.32vw;
                margin-top:2vw;
                margin-left:8.58vw;
                margin-right:8.58vw;
                background-color:#f09b4d;
                font-family:'sfprodisplay-regular', 'Helvetica', 'Arial', sans-serif;;
            }
            .grid-item2 {
                flex:1 1 40%; 
                max-width:100%; 
                padding:0 1rem; 
                text-align:center;
            }
            .grid-item2 img{
                width:66.28vw; 
                height:33.21vw;
                float:right;
                max-width:100%;
                padding-top:2.6vw;
            }
            .grid-item2 h3{
                padding-top:1.6vw;
                font-size:2.56vw;
                margin-bottom:1rem;
                text-align:center;
            }
            .grid-item2 p{
                font-size:1.18vw;
                line-height:1.5;
                text-align:justify;
            }
            #name,#email {
                width:50%; 
                padding:0.5vw; 
                font-size:1.08vw;
                border:1px solid #ccc; 
                border-radius:0.5vw; 
                box-sizing:border-box; 
                margin-bottom:0.4vw; 
                width:30.90vw;
                height:2.25vw;
            }
            #subscriptionForm label {
                font-size:1.28vw;
            }
            button {
                width:10vw; 
                padding:0.5vw; 
                font-size:1.5vw;
                border-radius: 1vw; 
                background-color:#a36b23;
                color:black;
                border-color:80aaff;
            }
            footer{
                margin-top:1.46vw;
                margin-bottom:-5.85vw;
                width:100%; 
                background-color:rgb(31, 21, 3);
            }
            .grid-container1{
                display:grid; 
                grid-template-columns:auto auto auto; 
                gap:1.2vw;
                padding:4.8vw;
                background-color:rgb(31, 21, 3);
                margin-top:1.2vw;
                margin-bottom:0vw;
                margin-left:0vw;
                margin-right:0vw;
                padding-bottom:1vw;
                padding-top:0.6vw;
                font-family:'sfprodisplay-regular', 'Helvetica', 'Arial', sans-serif;
            }
            .grid-item1{
                padding-top:1.2vw;                
                color:white;
                font-size:0.98vw;
            }
            #foot{
                font-weight:bold;
                font-size:1.18vw;                   	
            }
            .contact-info img.rounded-icon{
                border-radius:50%;
                width:1.56vw;
                height:1.56vw;
                margin-top:0.6vw;
                margin-right:0.6vw;
                overflow:hidden; 
            }
            .social-media-container{
                display:flex;
                align-items:center;
                justify-content:center; 
                padding-top:0;
                color: white;
            }
            .social-icons{
                list-style:none;
                padding:0vw;
                margin:0.52vw;
                display:flex;
                justify-content:center;
                align-items:center;
                border-radius:0.52vw;
                padding:0vw;
            }
            .social-icons li{
                margin:0.26vw;
            }
            .social-icons a{
                display:inline-block; 
                width:2.08vw;
                height:2.08vw;
                border-radius:50%;
                overflow:hidden; 
                border:0.16vw solid white;
            }
            .social-icons img{
                width:100%;
                height:100%;
                object-fit:cover; 
            }
        </style>
    </head>

    <body>
        <header>
			<img class="logo" src="../../assets/images/logo.png" alt="Your Logo">
            <div class="navi">
                <a href="home.php">Home</a>
                <a href="profile.php">Profile</a>
                <a class="active" href="subscription.php">Subscribe</a>
                <a href="aboutus.html">Help</a>
                <span id="lout"><a href="../../logout.php">Logout</a></span>
            </div>
		</header>

        <div class="grid-container2">
            <div class="grid-item2"><img src="../../assets/images/news.jpg" alt ="newsletter"></div>
            <div class="grid-item2">
            <form id="subscriptionForm" method="post" action="submit_subscribers.php" onsubmit="return subscribe();">
                    <h3>Subcribe to Our Newsletter!</h3>
                    <p>"Stay informed with our daily newsletter! Subscribe now to receive the latest headlines, in-depth analysis, and exclusive stories straight to your inbox. 
                        Whether it's breaking news, world events, or insightful editorials, we'll keep you updated on the topics that matter most. Don't miss out—sign up today!"</p>
                    
                    <input type="text" id="name" name="name" placeholder="Name">
                    <br><br>
                    <input type="email" id="email" name="email" placeholder="Email address"><br><br>
                    <label >
                      <input type="checkbox" checked="checked" id="click" name="click"> Daily Newsletter
                    </label><br><br>
                   
                    <button type="submit" value="Subscribe">Subscribe</button>
                    
                </form>
            </div>
        </div>

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
                        <li><a href="" target="_blank"><img src="../../assets/images/fb.jpg" alt="Facebook"></a></li>
                        <li><a href="" target="_blank"><img src="../../assets/images/x.jpg" alt="Twitter"></a></li>
                        <li><a href="" target="_blank"><img src="../../assets/images/insta.jpg" alt="Instagram"></a></li>
                        <li><a href="" target="_blank"><img src="../../assets/images/tiktok.jpg" alt="Tik tok"></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <script>
            function subscribe() {
                var userName = document.getElementById("name").value;
                var userEmail = document.getElementById("email").value;

                if (userName.trim() === "" || userEmail.trim() === "") {
                    alert("Please fill in both name and email fields before subscribing.");
                    return false; 
                }

                alert("Dear " + userName + ", you have successfully subscribed for our newsletter. Thank you!");

                return true;
            }
        </script>
    </body>
</html>
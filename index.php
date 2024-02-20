<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSite - Home</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header>
        <div id="header-logo">
            <a href="./">
                <img class="logo-img" src="./images/website-logo.png"></a>
        </div>
        <nav>
            <a href="./login.php">Sign In</a>
        </nav>
    </header>

    <div id="nav-strip">
    </div>

    <main>
        <div id="top-section">

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="./images/carousel-pic-1.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="./images/carousel-pic-2.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="./images/carousel-pic-3.jpg" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <hr>

        <div id="bottom-section">
            <div id="howto-message">
                <!-- <p>How to get started:</p> -->
                <p>Get started with BlogSite in 3 steps:</p>
            </div>
            <div id="tutorial-section">
                <div id="tutorial-card-section">
                    <div class="tutorial-cards">
                        <img id="sign-up-img" src="./images/sign-up.png">
                        <h2>Sign-up</h2>
                        <p>Sign-up to begin writing on BlogSite. Start off by telling us a few things about yourself.</p>
                    </div>
                    <img class="arrow-img" src="./images/arrow.png">
                    <div class="tutorial-cards">
                        <img id="find-your-niche-img" src="./images/find-your-niche.png">
                        <h2>Find your niche</h2>
                        <p>What are you interested in writing about? Check out other bloggers on BlogSite to see how they do it.</p>
                    </div>
                    <img class="arrow-img" src="./images/arrow.png">
                    <div class="tutorial-cards">
                        <img id="start-blogging-img" src="./images/start-blogging.png">
                        <h2>Start Blogging</h2>
                        <p>Write to your hearts content. Whether it's about hobbies, interests, or whatever you have going on in your life.</p>
                    </div>
                </div>

                <input type="button" onclick="window.location.href='./signup.php'" id="get-started-button" value="Start now &#8680;"></input>
            </div>

        </div>
    </main>

    <?php
    include "./footer.php";
    ?>

    <script src="carousel.js"></script>
</body>


</html>
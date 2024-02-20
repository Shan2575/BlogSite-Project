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
            <a href="./newsfeed.php">
                <img class="logo-img" src="./images/website-logo.png"></a>
        </div>
        <nav>
            <a class="current-page" href="./home.php">Home</a>
            <a href="./profile-validate.php">Profile</a>
            <a href="./">Sign Out</a>
        </nav>
    </header>

    <div id="nav-strip">
    </div>

    <main>
        <div id="home-container">
            <div id="home-main-section">
                <?php include "./check-blogs-home.php" ?>
            </div>
            <div id="home-aside-section">

            </div>
        </div>
    </main>

    <?php
    include "./footer.php";
    ?>
    <script src='./homeAsideCards.js'></script>
</body>

</html>
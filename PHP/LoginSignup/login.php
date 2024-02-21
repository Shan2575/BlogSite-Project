<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSite - Sign in</title>
    <link rel="stylesheet" href="../../styles.css">
</head>

<body>
    <header>
        <div id="header-logo">
            <a href="./">
                <img id="arrow-back-img" src="../../images/arrow.png">
                <p>Back to Home</p>
            </a>
        </div>
        <nav>
        </nav>
    </header>

    <div id="nav-strip">
    </div>

    <main>
        <div id="main-section-login">
            <div id="login-left">
                <img class="logo-img" src="../../images/website-logo.png">
                <form class="login-form" action="./log-me-in.php" method="post">
                    <label for="email">Email:</label><br>
                    <input type="text" name="email" placeholder="Enter your e-mail here" required><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" placeholder="Enter your password here" required><br>
                    <button type="submit">Sign In</button>
                </form>

            </div>
            <div class="partition"></div>
            <div id="signup-right">
                <h2>New to BlogSite?</h2>
                <h3>Click here to get started.</h3>
                <h3>&#8681;</h3>
                <form id="signup-button-form" action="./signup.php">
                    <button type="submit" value="Submit">Sign Up</button>
                </form>
            </div>
        </div>

    </main>

    <?php
    include "../footer.php";
    ?>

</body>

</html>
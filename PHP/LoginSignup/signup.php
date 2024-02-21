<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSite - Sign up</title>
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
        <div id="main-section-signup">
            <div id="login-left">
                <h2>Already a user of BlogSite?</h2>
                <h3>Click here to log back in.</h3>
                <h3>&#8681;</h3>
                <form id="signup-button-form" action="./login.php">
                    <button type="submit" value="Submit">Sign In</button>
                </form>
            </div>
            <div class="partition"></div>
            <div id="signup-right">
                <img class="logo-img" id="logo-img-signup" src="../../images/website-logo.png">
                <form class="login-form" id="signup-form" action="./add-user.php" method="post">
                    <label for="fname">First Name:</label><br>
                    <input type="text" name="fname" placeholder="Enter your first name here" required><br>
                    <label for="lname">Last Name:</label><br>
                    <input type="text" name="lname" placeholder="Enter your last name here" required><br>
                    <label for="email">Email:</label><br>
                    <input type="text" name="email" placeholder="Enter your e-mail here" required><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" placeholder="Enter your password here" required><br>
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
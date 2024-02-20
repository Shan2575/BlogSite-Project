<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSite - Profile</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>

    <header>
        <div id="header-logo">
            <a href="./home.php">
                <img class="logo-img" src="./images/website-logo.png"></a>
        </div>
        <nav>
            <a href="./home.php">Home</a>
            <a class="current-page" href="./profile-validate.php">Profile</a>
            <a href="./sign-out.php">Sign Out</a>
        </nav>
    </header>

    <div id="nav-strip">
    </div>

    <div>
        <div id="profile">
            <div id="profile-aside-section">
                <div id="profile-img-container">
                    <img id="profile-img" src="./images/profile-default.png">
                </div>
                <div id="profile-details">
                    <?php
                    include './check-auth.php';

                    echo "<h2>{$_SESSION['fname']} {$_SESSION['lname']}</h2>";
                    echo "<p>{$_SESSION['email']}</p>";
                    echo "<div id='bio'>
                         <h4>Bio:</h4>";
                    echo "<textarea readonly>{$_SESSION['bio']}</textarea>
                    </div>";
                    ?>
                    <button class="edit-profile-button" onclick="openForm()">Edit Profile</button>
                </div>
                <div id="edit-profile-container">
                    <form id="edit-profile-form" action="./update-profile.php" method="post">
                        <input type="hidden" name="userID" value="<?php echo "{$_SESSION['userID']}"; ?>">
                        <label for="fname">First Name:</label><br>
                        <input type="text" name="fname" placeholder="Enter your first name here" value="<?php echo "{$_SESSION['fname']}"; ?>" required><br>
                        <label for="lname">Last Name:</label><br>
                        <input type="text" name="lname" placeholder="Enter your last name here" value="<?php echo "{$_SESSION['lname']}"; ?>" required><br>
                        <label for="email">Email:</label><br>
                        <input type="text" name="email" placeholder="Enter your e-mail here" value="<?php echo "{$_SESSION['email']}"; ?>" required><br>
                        <label for="password">Password:</label><br>
                        <input type="password" name="password" placeholder="Enter your password here" value="<?php echo "{$_SESSION['pwd']}"; ?>" required><br>
                        <label for="bio">Bio:</label><br>
                        <textarea maxlength="255" name="bio" placeholder="Say something about yourself..."><?php echo "{$_SESSION['bio']}"; ?></textarea><br>
                        <button class="edit-profile-button" type="submit">Save</button>
                    </form>
                </div>

            </div>

            <div id="profile-main-section">
                <div id="blog-cards-container">
                    <?php
                    include "check-blogs.php";
                    ?>
                    <div id="add-blog-post-card" onclick="location.href='./new-blog-form.php';">
                        <div id='add-blog-post-image'>
                            <img src='./images/add-blog-post.png'>
                        </div>
                        <div id="add-blog-message">
                            <h3>Add new</h3>
                            <h3>Blog post </h3>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src='./edit-profile.js'></script>
    <?php $_SESSION['user_ID'] = $_SESSION['userID']; ?>
</body>

</html>
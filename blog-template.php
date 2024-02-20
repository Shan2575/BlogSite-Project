<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSite - Blog View</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header>
        <div id="header-logo">
            <a href="./newsfeed.php">
                <img class="logo-img" src="./images/website-logo.png"></a>
        </div>
        <nav>
            <a href="./home.php">Home</a>
            <a href="./profile-validate.php">Profile</a>
            <a href="./">Sign Out</a>
        </nav>
    </header>

    <div id="nav-strip">
    </div>

    <main>
        <form id="edit-blog-form" action="./save-editted-blog.php" method="post">
            <input type="hidden" value="<?php session_start();
                                        echo "{$_SESSION['blogID']}"; ?>">
            <input type="hidden" value="<?php session_start();
                                        echo "{$_SESSION['user_ID']}"; ?>">
        </form>
        <div id="blog-container">
            <div id="blog-cover-image-container">
                <?php
                if ($_SESSION['blogImage'] !== "") {
                    echo "<img id='blog-img' src='./images/{$_SESSION['blogImage']}'>
                    ";
                } else {
                    echo "<img id='profile-img'  src='./images/default-blog-image.png'>";
                }
                ?>

            </div>
            <div id="blog-border">

                <div id="blog-title">
                    <div>
                        <h2>&nbsp;<?php
                                    echo "{$_SESSION['blogTitle']}"; ?></h2>
                        <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        <p><?php
                            echo "- {$_SESSION['dateCreated']} -"; ?></p>
                    </div>

                    <div id="blog-options">
                        <?php
                        if ($_SESSION['userID'] === $_SESSION['user_ID']) {
                            echo "
                                <button onclick=\"location.href='./edit-blog-form.php';\">Edit Blog</button>
                                <button onclick=\"location.href='./delete-blog.php';\">Delete Blog</button>
                                ";
                        }
                        ?>
                    </div>
                </div>
                <div id="blog-content">
                    <textarea id="readonly-textarea" readonly><?php echo "{$_SESSION['blogDesc']}"; ?></textarea>
                </div>
            </div>

        </div>
    </main>

    <?php
    include "./footer.php";
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSite - Edit Blog</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header>
        <div id="header-logo">

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
            <input type="hidden" name="blogID" value="<?php session_start();
                                                        echo "{$_SESSION['blogID']}"; ?>">
        </form>
        <div id="blog-container">
            <div id="blog-cover-image-container">
                <input type="file" name="blogImage" value="<?php echo "{$_SESSION['blogImage']}"; ?>" form="edit-blog-form">
            </div>
            <div id="blog-border">
                <div id="blog-title">
                    <div>
                        <label for="blogTitle">Title:</label>
                        <input type="text" name="blogTitle" form="edit-blog-form" value="<?php echo "{$_SESSION['blogTitle']}"; ?>" maxlength="20">
                    </div>

                    <div id="blog-options">
                        <button type="submit" form="edit-blog-form">Save Blog</button>
                    </div>
                </div>
                <div id="blog-content">
                    <textarea name="blogDesc" form="edit-blog-form"><?php echo "{$_SESSION['blogDesc']}"; ?></textarea>
                </div>
            </div>

        </div>
    </main>

    <?php
    include "./footer.php";
    ?>

</body>

</html>
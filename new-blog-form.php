<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSite - New Blog</title>
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
        <form id="new-blog-form" action="./save-new-blog.php" method="post">
        </form>
        <div id="blog-container">
            <div id="blog-cover-image-container">
                <input type="file" name="blogImage" form="new-blog-form">
            </div>
            <div id="blog-border">
                <div id="blog-title">
                    <div>
                        <label for="blogTitle">Title:</label>
                        <input type="text" name="blogTitle" form="new-blog-form" maxlength="20" required>

                        <input type="hidden" name="dateCreated" id="dateCreated" form="new-blog-form">
                    </div>

                    <div id="blog-options">
                        <button type="submit" form="new-blog-form">Save Blog</button>
                    </div>
                </div>
                <div id="blog-content">
                    <textarea name="blogDesc" form="new-blog-form" required></textarea>
                </div>
            </div>

        </div>
    </main>

    <?php
    include "./footer.php";
    ?>
    <script src='./getCurrentDate.js'></script>
</body>

</html>
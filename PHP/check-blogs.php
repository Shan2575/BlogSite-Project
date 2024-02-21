<?php

include 'dbConnection.php';

$userID = $_SESSION['userID'];

$sql = $connection->prepare("SELECT * FROM blogs WHERE user_ID = ?");
$sql->bind_param("s", $userID);

$sql->execute();
$results = $sql->get_result();

$allRows = $results->fetch_all();

if (count($allRows) > 0) {
    foreach ($allRows as $row) {
        if ($row[5] !== "") {
            $blogImage = "<img id='saved-blog-image' src='../images/{$row[5]}'>";
        } else {
            $blogImage = "<img id='default-blog-image' src='../images/default-blog-image.png'>";
        }

        echo "
            <div class='blog-card' onclick=\"document.forms['view-blog-form{$row[0]}'].submit();\">
                <div class='blog-card-image'>
                    {$blogImage}
                </div>
                <div class='blog-card-title'>
                    <h3>{$row[2]}</h3>
                    <p>- {$row[4]} -</p>
                </div>
                <div class='view-blog-message'>
                    <p>View</p>
                </div>
            </div>
            
            <form id='view-blog-form{$row[0]}' action='../Profile/view-blog.php' method='post'>
                <input type='hidden' name='blogID' value='{$row[0]}'>                        
            </form>
            ";
    }
}

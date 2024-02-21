<?php

include 'dbConnection.php';


$sql = $connection->prepare("SELECT * FROM blogs WHERE 1");

$sql->execute();
$results = $sql->get_result();

$allRows = $results->fetch_all();

if (count($allRows) > 0) {
    foreach ($allRows as $row) {
        if ($row[5] !== "") {
            $blogImage = "<img src='../images/{$row[5]}'>";
        } else {
            $blogImage = "<img id='default-blog-image' src='../images/default-blog-image.png'>";
        }
        echo "
        <div class='home-main-card' onclick=\"document.forms['view-blog-form{$row[0]}'].submit();\">
            <div class='home-main-card-image'>
                    $blogImage
            </div>
            <div class='home-main-card-content'>
                <div class='home-main-card-title'>
                    <h2>{$row[2]}</h2>
                    <p>- {$row[4]} -</p>
                </div>
                <div class='home-main-card-desc'>
                    <textarea readonly>{$row[3]}</textarea>

                </div>

                <div class='view-blog-message' id='home-view-blog-message'>
                    <p>View</p>
                </div>
            </div>
        </div>
        <form id='view-blog-form{$row[0]}' action='./Profile/view-blog.php' method='post'>
                <input type='hidden' name='blogID' value='{$row[0]}'>                        
            </form>
        ";
    }
}

<?php 
$commentsFilepath = __DIR__ . '/comments.json';
$comments = json_decode(file_get_contents($commentsFilepath)); 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>XSS Vulnerable site</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <img src="/cute-cat.jpeg" />
        
        <h2>Comments</h2>
        <form method="POST" action="/post-handler.php">
            <textarea name="comment"></textarea>
            <input type="submit" />
        </form>
        
        <div class="comments">
            <?php
            foreach($comments as $index => $comment)
            {
                $humanCounter = $index+1;
                print "<p>Comment {$humanCounter}: " . nl2br($comment) . "</p>";
            }
            ?>
        </div>
    </body>
</html>

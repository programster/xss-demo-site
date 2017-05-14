<?php
$commentsFilepath = __DIR__ . '/comments.json';
$comments = json_decode(file_get_contents($commentsFilepath));
$comments[] = $_POST['comment'];
file_put_contents($commentsFilepath, json_encode($comments));

header('Location: /');
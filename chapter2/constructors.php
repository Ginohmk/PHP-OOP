<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    require 'Comment.php';

    $comment = new Comment('This is my first', rand(1,20));

    ?>

  <p> <?php
   echo 'A user with the id of '.$comment->userId.' just left a comment which says'.$comment->text;
   ?>
  </p>
</body>
</html>
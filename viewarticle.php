<?php
include './includes/articleview.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="./index.php">Home</a><br>
  <h1>Article Detail Screen</h1>
  <h3>Article Title</h3>
  <?php echo $article[0]['articles_title']; ?> <br>
  <h3>Article Content Snippet</h3>
  <?php echo $article[0]['articles_content']; ?> <br>
  <h3>Created Date</h3>
  <?php echo $article[0]['articles_createdDate']; ?> <br>
</body>

</html>
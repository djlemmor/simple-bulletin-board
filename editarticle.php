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
  <h1>Edit Article Screen</h1>
  <form action="./includes/articles.inc.php" method="POST">
    <label for="articletitle">Article Title:</label><br>
    <input type="text" id="articletitle" name="articletitle" value="<?php echo $article[0]['articles_title']; ?>"><br>
    <label for="articlecontent">Article Content:</label><br>
    <textarea id="articlecontent" name="articlecontent" rows="4" cols="50"><?php echo $article[0]['articles_content']; ?></textarea><br><br>
    <input type="hidden" name="articleId" value="<?php echo $_GET['articleId']; ?>">
    <input type="submit" name="edit" value="Edit">
  </form>
</body>

</html>
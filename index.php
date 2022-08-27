<?php
include './includes/articlesview.inc.php';
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    h4 {
      display: inline-block;
      margin: 0.5em 0;
    }
  </style>
</head>

<body>
  <h1>Simple Bulletin Board</h1>
  <h2><a href="./createarticle.php">Create New Article</a></h2> <br> <br>
  <?php if (isset($_GET['error'])) : ?>
    <?php if ($_GET['error'] == "noarticles") : ?>
      <h4>No Articles!</h4> <br>
    <?php endif; ?>
  <?php elseif (count($articles)) : ?>
    <?php foreach ($articles as $key => $article) : ?>
      <h4>Article Title</h4>
      <a href="./viewarticle.php?articleId=<?php echo $article['articles_id']; ?>"><?php echo $article['articles_title'] ?></a> <br>
      <h4>Article Content Snippet</h4>
      <?php echo $article['articles_content'] ?> <br>
      <h4>Created Date</h4>
      <?php echo $article['articles_createdDate'] ?> <br>
      <a href="./editarticle.php?articleId=<?php echo $article['articles_id']; ?>">Edit Article</a> <br>
      <a href="./includes/articles.inc.php?articleId=<?php echo $article['articles_id']; ?>">Delete Article</a> <br>
      <hr>
    <?php endforeach; ?>
  <?php endif; ?>
</body>

</html>
<?php
if (isset($_GET['articleId'])) {

  // Grabbing The Data
  $articleId = filter_input(INPUT_GET, 'articleId', FILTER_SANITIZE_NUMBER_INT);

  include './classes/dbh.classes.php';
  include './classes/article.classes.php';
  include './classes/articleview.classes.php';
  $articleObj = new ArticlesView();
  $article = $articleObj->showArticle($articleId);
}

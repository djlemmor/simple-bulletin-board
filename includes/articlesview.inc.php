<?php

if (!isset($_GET["error"])) {
  include "./classes/dbh.classes.php";
  include "./classes/article.classes.php";
  include "./classes/articleview.classes.php";
  $articlesObj = new ArticlesView();
  $articles = $articlesObj->showArticles();
}

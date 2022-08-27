<?php
if (isset($_POST['submit'])) {

  // Grabbing The Data
  $articleTitle = filter_input(INPUT_POST, 'articletitle', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $articleContent = filter_input(INPUT_POST, 'articlecontent', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // Instantiate Article Controller Class
  include '../classes/dbh.classes.php';
  include '../classes/article.classes.php';
  include '../classes/articlecontroller.classes.php';
  $article = new ArticleController($articleTitle, $articleContent);

  // Running Error Handlers
  $article->createArticle();
  // Going Back To Front Page
  header("Location: ../index.php");
} else if (isset($_POST['edit'])) {

  // Grabbing The Data
  $articleId = filter_input(INPUT_POST, 'articleId', FILTER_SANITIZE_NUMBER_INT);
  $articleTitle = filter_input(INPUT_POST, 'articletitle', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $articleContent = filter_input(INPUT_POST, 'articlecontent', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // Instantiate Article Controller Class
  include '../classes/dbh.classes.php';
  include '../classes/article.classes.php';
  include '../classes/articlecontroller.classes.php';
  $article = new ArticleController($articleTitle, $articleContent);

  // Running Error Handlers
  $article->updateArticle($articleId);
  // Going Back To Article Edit Page
  header("Location: ../editarticle.php?articleId=" . $articleId);
} else if (isset($_GET['articleId'])) {
  // Grabbing The Data
  $articleId = filter_input(INPUT_GET, 'articleId', FILTER_SANITIZE_NUMBER_INT);
  $articleTitle = "";
  $articleContent = "";

  // Instantiate Article Controller Class
  include '../classes/dbh.classes.php';
  include '../classes/article.classes.php';
  include '../classes/articlecontroller.classes.php';
  $article = new ArticleController($articleTitle, $articleContent);

  // Running Error Handlers
  $article->deleteArticle($articleId);
  // Going Back To Index Page
  header("Location: ../index.php");
}

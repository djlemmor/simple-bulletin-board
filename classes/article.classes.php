<?php

class Article extends Dbh
{
  protected function setArticle($articleTitle, $articleContent)
  {
    $sql = "INSERT INTO articles (articles_title, articles_content) VALUES (?, ?)";
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute([$articleTitle, $articleContent])) {
      $stmt = null;
      header("Location: ../index.php?error=statementfailed");
      exit();
    }

    $stmt = null;
  }

  protected function getArticles()
  {
    $sql = "SELECT * FROM articles";
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute()) {
      $stmt = null;
      header("Location: ./index.php?error=statementfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ./index.php?error=noarticles");
      exit();
    }

    $results = $stmt->fetchAll();
    $stmt = null;
    return $results;
  }

  protected function getArticle($articleId)
  {
    $sql = "SELECT * FROM articles WHERE articles_id = ?";
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute([$articleId])) {
      $stmt = null;
      header("Location: ./index.php?error=statementfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ./index.php");
      exit();
    }

    $results = $stmt->fetchAll();
    $stmt = null;
    return $results;
  }

  protected function editArticle($articleId, $articleTitle, $articleContent)
  {

    $sql = "UPDATE articles SET articles_title = ?, articles_content = ? WHERE articles_id = ?";
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute([$articleTitle, $articleContent, $articleId])) {
      $stmt = null;
      header("Location: ./index.php?error=statementfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ../editarticle.php?articleId=" . $articleId . "&error=nochange");
      exit();
    }

    $results = $stmt->fetchAll();
    $stmt = null;
    return $results;
  }

  protected function removeArticle($articleId)
  {
    $sql = "DELETE FROM articles WHERE articles_id = ?";
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt->execute([$articleId])) {
      $stmt = null;
      header("Location: ./index.php?error=statementfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ./index.php?error=noarticles");
      exit();
    }
    $stmt = null;
  }
}

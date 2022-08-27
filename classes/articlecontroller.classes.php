<?php
class ArticleController extends Article
{
  private $articleId;
  private $articleTitle;
  private $articleContent;

  public function __construct($articleTitle, $articleContent)
  {
    $this->articleTitle = $articleTitle;
    $this->articleContent = $articleContent;
  }

  public function createArticle()
  {
    if ($this->emptyInput() == false) {
      header("Location: ../createarticle.php?error=emptyinput");
      exit();
    }

    $this->setArticle($this->articleTitle, $this->articleContent);
  }

  public function updateArticle($articleId)
  {
    $this->articleId = $articleId;
    if ($this->emptyInput() == false) {
      header("Location: ../editarticle.php?articleId=" . $this->articleId . "&error=emptyinput");
      exit();
    }

    $this->editArticle($this->articleId, $this->articleTitle, $this->articleContent);
  }

  public function deleteArticle($articleId)
  {
    $this->articleId = $articleId;
    if (empty($this->articleId)) {
      header("Location: ../index.php?error=emptyinput");
      exit();
    }

    $this->removeArticle($this->articleId);
  }

  private function emptyInput()
  {
    $result = false;
    if (empty($this->articleTitle) || empty($this->articleContent)) {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }
}

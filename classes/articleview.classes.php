<?php

class ArticlesView extends Article
{
  public function showArticles()
  {
    return $this->getArticles();
  }
  public function showArticle($articleId)
  {
    return $this->getArticle($articleId);
  }
}

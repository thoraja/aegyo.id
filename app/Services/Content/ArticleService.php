<?php

namespace App\Services\Content;

use App\Models\Content\Article;

class ArticleService
{
    /**
     * Handle create Article
     *
     * @param mixed $value
     *
     * @return Article
     */
    public function store($value)
    {
        $article = Article::create($value);

        return $article;
    }

    /**
     * @param Article $article
     * @param mixed $value
     *
     * @return void
     */
    public function update(Article $article, $value)
    {
        $article->update($value);
    }

    /**
     * @param Article $article
     *
     * @return void
     */
    public function destroy(Article $article)
    {
        $article->delete();
    }
}

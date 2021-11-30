<?php

namespace App\Http\Controllers\API\Content;

use App\Models\Content\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\Content\ArticleRequest;
use App\Services\Content\ArticleService;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Article::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request, ArticleService $articleService)
    {
        return $articleService->store($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return $article->load('category');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article, ArticleService $articleService)
    {
        return $articleService->update($article, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, ArticleService $articleService)
    {
        return $articleService->destroy($article);
    }
}

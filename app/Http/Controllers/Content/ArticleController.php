<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Models\Content\Article;
use App\Http\Controllers\Controller;
use App\Services\Content\ArticleService;
use App\Http\Requests\Content\ArticleRequest;
use App\Models\Content\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('category')->get()->groupBy('category.name');

        return view('content.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('content.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request, ArticleService $articleService)
    {
        $articleService->store($request->validated());

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article = $article->load('category');

        return view('content.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();

        return view('content.articles.edit', compact(['categories', 'article']));
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
        $articleService->update($article, $request->validated());

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, ArticleService $articleService)
    {
        $articleService->destroy($article);

        return redirect()->route('articles.index');
    }
}

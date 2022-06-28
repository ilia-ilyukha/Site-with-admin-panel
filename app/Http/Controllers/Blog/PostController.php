<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_count = Article::all()->count();
        $articles = $this->list();

        $styles = $this->addStyles();

        $data = [
            'article_count' => $article_count,
            'articles'      => $articles,
            'styles'        => $styles
        ];

        return view('blog.index', $data);
    }

    /**
     * Get articles list .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $articles = Article::leftJoin('article_authors', 'articles.author_id', '=', 'article_authors.id')
            ->orderBy('articles.id', 'DESC')
            ->take(10)
            ->get(['articles.*', 'article_authors.nick as nickname']);

        foreach ($articles as $article) {
            $article['image'] = $article->getImage($article['image']);            
            $article['annotation'] = html_entity_decode($article['annotation']);
        }

        return $articles;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $article['text'] = html_entity_decode($article['text']);
        $article['annotation'] = html_entity_decode($article['annotation']);
        $article['image'] = $article->getImage($article['image']);
        $author = DB::table('article_authors')->find($article['author_id']);

        return view('blog.show', [
            'article'      => $article,
            'author'       => $author->nick
        ]);
    }

    /**
     * Adding styles for blog page 
     */
    public function addStyles(){
        $styles = [
            'css/blog.css'
        ];

        return $styles;
    }
}

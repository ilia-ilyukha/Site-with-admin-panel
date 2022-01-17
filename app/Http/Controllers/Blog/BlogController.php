<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
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
        // foreach ($articles as $article) {
        //     $article['status'] = ($article['status_id'] == 1) ? "Enable" : "Disable";
        //     echo $article->name .  "<br>";
        //     echo $article->author_id .  "<br>";
        //     echo $article->annotation .  "<br>";
        //     echo $article->text .  "<br>";

        //     echo "<br>";
        // }
        // echo '<pre>'; var_dump($articles);
        // die('123');  
        // [id] => 1
        // [name] => First post
        // [author_id] => 1
        // [annotation] => To get started, let's create an Eloquent model. Models typically live in the app\Models directory and extend the Illuminate\Database\Eloquent\Model cl
        // [text] => T

        return view('blog.index', [
            'article_count' => $article_count,
            'articles'      => $articles
        ]);
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

        return $articles;
    }
}

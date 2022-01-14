<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
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
        foreach ($articles as $article) {
            $article['status'] = ($article['status_id'] == 1) ? "Enable" : "Disable";
        }
        // echo '<pre>'; print_r($articles); die('123');

        return view('admin.article.index',[
            'article_count' => $article_count,
            'articles'      => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.add', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       echo 'hello!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $author = DB::table('article_authors')->find($article['id']);

// echo '<pre>'; var_dump($article['id']); die('123');
        return view('admin.article.edit', [
            'article' => $article,
            'author'  => $author
        ]);  
    }
    // public function edit(Post $post)
    // {
    //     $categories = Category::orderBy('created_at', 'DESC')->get();

    //     return view('admin.post.edit', [
    //         'categories' => $categories,
    //         'post' => $post,
    //     ]);
    // }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
                    ->orderBy('articles.name')
                    ->take(10)
                    ->get(['articles.*', 'article_authors.nick as nickname']);

            return $articles;
    }
}

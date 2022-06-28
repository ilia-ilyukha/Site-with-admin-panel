<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /*
        TODO:
        1) Add comments to post
    */

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

        return view('admin.article.index', [
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
        $authors = DB::table('article_authors')->get();
        return view('admin.article.add', [
            'authors' => $authors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        
        $article->name = $request->title;
        $article->status_id = $request->status;
        $article->annotation = $this->cutString(htmlentities($request->text, ENT_NOQUOTES, 'UTF-8'), 50);
        $article->author_id = $request->author;
        $article->created_at = date('Y-m-d'); 
        $article->text = htmlentities($request->text, ENT_NOQUOTES, 'UTF-8');
        $article->image = $request->image;
        $article->save();

        return redirect()->back()->withSuccess('Статья была успешно добавлена!');
    }
    
    public function cutString($string, $maxlen) {
        $string = str_replace("\n", "", $string);
        $len = (mb_strlen($string) > $maxlen)? mb_strripos(mb_substr($string, 0, $maxlen), ' ') : $maxlen;
        $cutStr = mb_substr($string, 0, $len);

        return (mb_strlen($string) > $maxlen)? $cutStr.' ...' : $cutStr;
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
     * Show the form for editing article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article['text'] = html_entity_decode($article['text']);
        $article['annotation'] = html_entity_decode($article['annotation']);
        $author = DB::table('article_authors')->find($article['author_id']);
        $authors = DB::table('article_authors')->get();
        return view('admin.article.edit', [
            'article' => $article,
            'authors'  => $authors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->name = $request->name;
        $article->status_id = $request->status;
        $article->annotation = $request->annotation;
        $article->author_id = $request->author;
        $article->created_at = date('Y-m-d'); 
        $article->text = $request->text;
        $article->image = $request->image;
        $article->save();

        return redirect()->back()->withSuccess('Статья была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()->withSuccess('Статья была успешно удалена!');
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Article;
use Auth;
use App\Models\Employers;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_count = Article::all()->count();
        $userId = Auth::id();

        return view('admin.home.index', [
            "articles_count" => $post_count
        ]);
    }

}

<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comment;

class PostCommentController extends Controller
{
    //
    public function add(Request $request) {
        $comment = new Comment();

        $comment->post_id = $request->article_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->text = $this->textCheck($request->text);
        $comment->approved = false;       
        $comment->created_at = date('Y-m-d');

        $comment->save();

        return redirect()->back()->withSuccess('Your comment will be added soon! Thank you!');
    }

    public function textCheck($text){
        $text = strip_tags($text);

        return $text;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id) {
        $post = Post::find($id);
        $comments = $post->comments;

        return view('showPost', ['post' => $post, 'comments' => $comments]);
    }
}

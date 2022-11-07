<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id) {
        return view('editComment', ['postId' => $id]);
    }

    public function store(CommentRequest $request, $id) {
        $post = Post::find($id);
        $post->comments()->create([
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back();
    }
}

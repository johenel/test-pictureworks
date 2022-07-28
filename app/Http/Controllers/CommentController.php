<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreRequest $request)
    {
        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->content = $request->comments;
        $comment->save();

        return redirect("/users/{$comment->user_id}");
    }
}

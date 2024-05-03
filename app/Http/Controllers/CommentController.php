<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', ['comments' => $comments]);
    }

    /**
     * Display only the user's comments
     */
    public function myIndex()
    {
        $user = Auth::user();
        $comments = $user->comments;
        return view('comments.myIndex', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($postId)
    {
        $post = Post::findOrFail($postId);
        return view('comments.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|max:255',
            'visibility' => 'required|string|max:255',
            'likes' => 'nullable|integer',
        ]);

        $likes = $request->has('likes') ? $request->likes : 0;

        $comment = new Comment();
        $comment->content = $validatedData['content'];
        $comment->visibility = $validatedData['visibility'];
        $comment->likes = $likes;
        $comment->save();

        return redirect()->route('comments')->with('success', 'Comment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

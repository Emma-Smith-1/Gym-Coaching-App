<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Display only the user's posts
     */
    public function myIndex()
    {
        $user = Auth::user();
        $posts = $user->posts;
        return view('posts.myIndex', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'visibility' => 'required|string|max:255',
            'likes' => 'nullable|integer',
            'comments' => 'nullable|integer',
            'media' => 'required|string|max:255',
            'status' => 'required|string|max:10',
        ]);

        $likes = $request->has('likes') ? $request->likes : 0;
        $comments = $request->has('comments') ? $request->comments : 0;
        

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->category = $validatedData['category'];
        $post->visibility = $validatedData['visibility'];
        $post->likes = $likes;
        $post->comments = $comments;
        $post->media = $validatedData['media'];
        $post->status = $validatedData['status'];
        $post->coach_id = Auth::id();

        $post->save();

        return redirect()->route('posts')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
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

    public function like(Post $post)
    {
        $post->like();

        return redirect()->back();
    }
}

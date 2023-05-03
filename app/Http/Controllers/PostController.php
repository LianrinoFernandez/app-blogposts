<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $authors = User::all();
        return view('post.index', compact(['posts','authors']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = User::all();
        return view('post.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create([
            'user_id' => $request->author_id,
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request ->content,
            
        ]);
        return redirect (route('post.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $author = User::find($post->user_id);
       return view('post.show', compact(['post','author']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $author = User::find($post->user_id);
        return view('post.edit', compact(['post','author']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        
       $post->update([
        'title' => $request->title,
        'summary' => $request->summary,
        'content' => $request ->content,
       ]);
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
       $post->delete();
       return redirect(route('post.index'));
    }
   
    
}

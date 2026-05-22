<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::with('user')->orderBy('title')->paginate(5);
        return view('posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = user::get();
        return view('posts.create', compact('users'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(
        [
        'title' => 'required|min:5',
        'content' => 'required|min:50',

        ]
        );
        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user()->associate(User::findOrFail($request->get('user')));
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $users = User::get();
        return view('posts.edit', compact('post','users'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id=$request->get('user_id');
        $post->save();
        return redirect()->route('posts.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function newPost()
    {
        $post = new Post();
        $post->title = "Post creat nº: ".rand(1,100);
        $post->content = "adefasdfsafwaerawerfsadfgsaergt a ";
        $post->save();

    }
    public function editPost($id)
    {
        $postToModify = Post::findOrFail($id);
        $postToModify->title="Other title";
        $postToModify->save();
    }

}

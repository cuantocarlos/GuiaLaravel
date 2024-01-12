<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //mios
    public function index()
    {
        return view('posts.index',['posts' => Post::latest()->paginate()]);
    }
    public function store(Request $request)
    {
        $request->validate(['body' => 'required']);
        //dd(['body' => $request->body]);
        $request->user()->posts()->create($request->only('body'));
        return back()->with('status', 'Post guardado con éxito');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status', 'Post eliminado con éxito');
    }
}

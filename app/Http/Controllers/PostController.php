<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //mios
    public function index()
    {
        return view('posts.index');
    }
    public function store(Request $request)
    {
        $request->validate(['body' => 'required']);
        $request->user()->posts()->create($request->only('body'));
        return back()->with('status', 'Post guardado con éxito');
    }
    public function destroy()
    {
        //eliminar
    }
}

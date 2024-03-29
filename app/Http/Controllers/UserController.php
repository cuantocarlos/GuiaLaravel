<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use APP\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', [
            'posts' => $user->posts()->latest()->paginate()]);
    }
}

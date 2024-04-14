<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('users.index')->with(['posts' => $user->getPaginateByUser()]);
    }
    
    public function show(User $user)
    {
        return view('users.show')->with(['users' => $user]);
    }
}
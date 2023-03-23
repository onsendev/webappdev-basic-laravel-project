<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        
        // この部分を追記しましょう！
        if (Auth::check()) {
            $todos = Todo::whereUserId(Auth::id())->get();
        } else {
            $todos = [];
        }
        
        return view('todos', [
            'todos' => $todos,
        ]);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        // $todos = Todo::all();        
        return view('todos', [
            // 'todos' => $todos,
        ]);
    }
    
}

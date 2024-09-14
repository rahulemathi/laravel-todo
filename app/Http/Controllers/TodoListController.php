<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoListController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function store(Request $request){
        $todo = new Todo();
        
        $todo->name = $request->name;
        $todo->user_id = Auth::id();
        $todo->save();

        return redirect('/')->with('success','Added to Todo');
    }
}

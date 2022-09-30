<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Todotwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    public function index(){

        $todo_list = Todotwo::all();
        return view('index',compact('todo_list'));
    }
    public function store(CreateValidationRequest $request){

        $request->validated();

        $input = $request->all();
        Todotwo::create($input);
        return redirect('/');
    }

    // edit route
    public function edit($id){
        $todo_list = Todotwo::find($id);
        return view('edit',compact('todo_list'));
    }

    //update route

    public function update(Request $request,$id){

        $todo = Todotwo::find($id);
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->update();
        return redirect('/');

    }

    public function delete(Todotwo $todotwo){
        $todotwo->delete();
        return redirect('/');
    }

    public function post(){
        $post = Post::find(3);;
        return view('post',compact('post'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function AddTodo()
    {
        return view('add_todo');
    }
    public function StoreTodo(Request $request)
    {
        $request->validate([
            'todo'=>'required',
        ]);

        $data = [
            'todo'=>$request->todo,
            'status'=> 0,
        ];
        Todo::insert($data);

        return redirect()->route('list.todo')->with('success', 'TODO Added Successfully!');
    }
    public function listTodo()
    {
        $todos = Todo::all();
        return view('todo_list',[
            'todos'=>$todos,
        ]);
    }
    public function ApproveTodo($id)
    {
        $data = Todo::find($id);

        $data->status = 1;

        $data->save();

        return redirect()->back();
    }
    public function cencle($id)
    {
        $data = Todo::find($id);

        $data->status = -1;

        $data->save();

        return redirect()->back();
    }
    public function delete($id)
    {
        Todo::find($id)->delete();

        return back()->with('delete', 'TODO Deleted Successfully!');

    }
}

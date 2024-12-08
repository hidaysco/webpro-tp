<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::get();
        return view('index', compact('tasks'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required | string',
            'description' => 'required | string',
            'status' => 'optional | in: Pending, Completed'
        ]);
        Task::create($request->input());
        return redirect()->route('tasks.index')->with('success', 'Task successfully added');
    }
    public function edit($id){
        $task = Task::find($id);
        if (!$task) {
            return redirect()->route('tasks.index')->with('success', 'Task not found');
        }
        return view('edit', compact('task'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required | string',
            'description' => 'required | string',
            'status' => 'in:Pending,Completed'
        ]);

        Task::where('id', $id)->update($request->except(['_token', '_method']));
        return redirect()->route('tasks.index')->with('success', 'Task successfully updated');
    }
    public function destroy($id){
        Task::destroy($id);
        return redirect()->route('tasks.index')->with('success', 'Task successfully deleted');
    }

}

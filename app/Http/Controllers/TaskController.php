<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::all();
        return view('task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new task
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::pluck('name','id');
        return view('task.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $task=Task::create($request->all());
        $task->tags()->attach($request->input('tags'));
        return redirect('task');
    }

    /**
     * Display the single task
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('task.show',compact('task'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('task');
    }
}

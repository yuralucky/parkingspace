<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TagController extends Controller
{
    /**
     * Display a list all tag
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new tag
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks=Task::pluck('name','id');
        return view('tag.create',compact('tasks'));
    }

    /**
     * Store a new Tag
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tag= Tag::create($request->all());
        $tag->tasks()->attach($request->input('tasks'));
        return redirect('tag');
    }

    /**
     * Display the Tag
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {

        return view('tag.show', compact('tag'));
    }


    /**
     * Remove the Tag
     *
     * @param  \App\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect('tag');
    }
}

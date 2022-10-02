<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;    

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tasklists = Task::all();

        return view('Tasklists.index', [
            'Tasklists' => $Tasklists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Tasklists = new Task;

        return view('Tasklists.create', [
            'Tasklists' => $Tasklists,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tasklists = new Task;

        $Tasklists->content = $request->content;
        $Tasklists->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $Tasklist = Task::findOrFail($id);

        return view('Tasklists.show', [
            'Tasklist' => $Tasklist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Tasklist = Task::findOrFail($id);

        
        return view('Tasklists.edit', [
            'Tasklist' => $Tasklist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Tasklist = Task::findOrFail($id);
        
        $Tasklist->content = $request->content;
        $Tasklist->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $todolist = Task::findOrFail($id);
        
        $todolist->delete();

        
        return redirect('/');
    }

}

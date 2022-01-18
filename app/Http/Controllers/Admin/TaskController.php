<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tasks;
use App\Models\TasksHours;

class TaskController extends Controller
{

    /*
    TODO:
    More than one assignee in task;
    Calendar with planning tasks;
    Tabs "Active", "In progress", "Done" etc.    
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->list();
        return view('admin.task.index', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasks $task)
    {
        $hours = $this->hoursList($task['id']);     
        $hours_quantity = TasksHours::where('task_id', $task['id'])->sum('quantity');
        return view('admin.task.edit', [
            'task' => $task,
            'hours' => $hours,
            'hours_quantity' => $hours_quantity
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get tasks list .
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $tasks = Tasks::leftJoin('users', 'tasks.assignee', '=', 'users.id')
        ->orderBy('created_at', 'DESC')
        ->get(['tasks.*', 'users.name']);
        return $tasks;
    }

    public function addHours(Request $request){
        $tasks_hours = new TasksHours();

        $tasks_hours->quantity = $request->hours_quantity;
        $tasks_hours->description = $request->description;
        $tasks_hours->assignee_id = Auth::id();
        $tasks_hours->task_id = $request->task_id;      
        $tasks_hours->created_at = date('Y-m-d');
        
        $tasks_hours->save();

        return redirect()->back()->withSuccess('Hours have ben added!');
    }
    /**
     * Get hours for task list .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hoursList($task_id){
        return TasksHours::where('task_id', $task_id)
        ->join('users', 'users.id', '=', 'tasks_hours.assignee_id')
        ->get(['tasks_hours.*', 'users.name as assignee']);
    }

}

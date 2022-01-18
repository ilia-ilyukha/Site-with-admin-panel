<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tasks;
use App\Models\TasksHours;
use App\Models\TasksDevelopers;
use App\Models\User;

class TaskController extends Controller
{

    /*
    TODO:
    More than one assignee in task;
    Calendar with planning tasks;
    Tabs "Active", "In progress", "Done" etc.;    
    Task history;
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
        $users = User::get();

        return view('admin.task.create', [
            'authors' => $users,
            'assignees' => $users,
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
        
        $task = new Tasks();

        $task->title = $request->title;
        $task->assignee = $request->assignee;
        $task->description = $request->description;
        $task->author_id = $request->author;
        $task->created_at = date('Y-m-d'); 
        $task->updated_at = date('Y-m-d'); 
        $task->save();

        return redirect()->route('admin_panel/tasks')->back()->withSuccess('Статья была успешно добавлена!');
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
        $users = User::get();
        $hours = $this->hoursList($task['id']);
        $hours_quantity = TasksHours::where('task_id', $task['id'])->sum('quantity');

        return view('admin.task.edit', [
            'task' => $task,
            'hours' => $hours,
            'hours_quantity' => $hours_quantity,
            'assignees' => $users,
            'authors' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }
    public function update(Request $request, Tasks $task)
    {
        //
        //***Code for more than one developers - now select2 doesn't work.
        //
        // if (count($request->developers) > 0) {
        //     TasksDevelopers::where('task_id', $task->id)->delete();

        //     foreach ($request->developers as $developer) {
        //         $data[] = [
        //             'task_id' => $task->id,
        //             'developer_id' => $developer
        //         ];
        //     }
        //     TasksDevelopers::insert($data);
        // }

        // echo '<pre>'; var_dump($request->assignee); die('123');


        $task->title = $request->title;
        $task->assignee = $request->assignee;
        $task->description = $request->description;
        $task->author_id = $request->author;
        // $task->priority_id = $request->priority_id;
        $task->save();

        return redirect()->back()->withSuccess('Статья была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks $task)
    {
        $task->delete();
        return redirect()->back()->withSuccess('Task has been removed!');
    }
    /**
     * Get tasks list .
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $tasks = Tasks::leftJoin('users', 'tasks.assignee', '=', 'users.id')
            ->orderBy('id', 'DESC')
            ->get(['tasks.*', 'users.name']);
        return $tasks;
    }

    public function addHours(Request $request)
    {
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
    public function hoursList($task_id)
    {
        return TasksHours::where('task_id', $task_id)
            ->join('users', 'users.id', '=', 'tasks_hours.assignee_id')
            ->get(['tasks_hours.*', 'users.name as assignee']);
    }
}

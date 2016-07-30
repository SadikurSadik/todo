<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;
use Auth;
use DB;

class TasksController extends Controller
{
    // Get the newtask Page
    public function newTask(){
    	$projects = DB::table('clients')
            ->join('projects', 'clients.id', '=', 'projects.client_id')
            ->where('clients.member_id', Auth::user()->id)
            ->get();

    	return view('members.task')->with('projects', $projects);
    }

    // Save Task
    public function store(Request $request){
        //$date = '2016-07-31';
    	$this->validate($request,[
    		'project_id'=>'required|exists:projects,id',
    		'name'=>'required',
            'est_start_time'=>'required|date',
    		'est_end_time'=>'date'
		]);
        $request['member_id'] = Auth::user()->id;
		$task = new Task();
		$task->create($request->all());
        session()->flash('action_message', 'Task created Successfully!!');
        return back();
    }

    // Update Task Status
    public function updateTask(Request $request){
        $id = $request['id'];
        $updated_id = $request['updated_id'];

        DB::table('tasks')->where('id', $id)->update(['task_status_id' => $updated_id]);
        $taskStatus = DB::table('task_statuses')->where('id', $updated_id)->first();
        $msg = "Task has been ".$taskStatus->value." successfully.";

        $messageType = 'alert-success';
        if($taskStatus->value == 'Cancelled') $messageType = 'alert-danger';
        elseif($taskStatus->value == 'Paused') $messageType = 'alert-warning';
        session()->flash('action_message', $msg);
        session()->flash('class', $messageType);
        
        return redirect()->back();
    }
}

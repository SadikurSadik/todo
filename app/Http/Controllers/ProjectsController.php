<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Project;
use Auth;
use App\Http\Requests;

class ProjectsController extends Controller
{
    public function index()
    {
    	$clients = Client::all()->where('member_id', Auth::user()->id);
        return view('members.project', compact('clients'));
    }

    /*Save Project*/
    public function store(Request $request){

    	$this->validate($request,[
    		'clientId'=>'required|exists:clients,id',
    		'projectName'=>'required',
    		'startTime'=>'required|date',
		]);
    	
        //dd($request->all());
        $project = new Project();
        $project->client_id = $request['clientId'];
        $project->name = $request['projectName'];
        $project->start_time = $request['startTime'];
        $project->est_end_time = $request['EstEndTime'];
        $project->save();

    	session()->flash('action_message','project saved successfully!');
    	return redirect()->route('project');
    }
}

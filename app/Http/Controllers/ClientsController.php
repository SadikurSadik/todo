<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests;
use Auth;

class ClientsController extends Controller
{
    public function index(){
    	return view('members.client');
    }

    /*Save Client*/
    public function store(Request $request){
    	$this->validate($request,[
    		'name'=>'required|min:3|unique:clients,name,NULL,id,member_id,' . Auth::user()->id
		]);
    	$client = new Client();
    	$client->name = $request['name'];
    	$client->contact = $request['contact'];
    	$client->member_id = Auth::user()->id;
    	$client->save();
    	session()->flash('action_message','Client saved successfully!');
    	return redirect()->route('client');
    }
}

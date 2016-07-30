<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Member;
use App\Task;
use Auth;

class MembersController extends Controller
{
    public function index() {
        $tasks = Task::all()->where('member_id', Auth::user()->id)->whereIn('task_status_id', [1, 2, 4]);
        return view('members.index', compact('tasks'));
    }

    public function store (Request $request) {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:members',
            'password'=>'required|min:3',
            'photo'=>'image|mimes:jpeg,jpg,png,gif'
        ]);
        $member = new Member();
        $member->status_id= 1;
        $member->password = bcrypt($request['password']);
        $member->name = $request['name'];
        $member->email = $request['email'];
        $member->contact = $request['contact'];
        if($request->hasFile('photo')){
            $pho = $request->file('photo');
            $member->photo = $pho->getClientOriginalName();
            $pho->move('img',$pho->getClientOriginalName());
        }
        else{
            $member->photo = 'profile-pic.png';
        }

        $member->save();
        session()->flash('action_message', 'Register successfully done!!');

        return redirect()->Route('dashboard');
    }

    // Sign In Action
    public function login(Request $request)
    {
        $dataAttempt = [
            "email" => $request['emaill'],
            "password" => $request['password']
        ];

        if(Auth::attempt($dataAttempt)) {
            return redirect()->Route('dashboard');
        }
        session()->flash('action_message_login', 'Authentication Failed. Please check email and password.');
        return redirect()->back()->withInput();
    }

    // Logout Action
    public function logout()
    {
        //session()->forget('action_message');
        Auth::logout();
        return redirect()->Route('home');
    }

    // Get Profile page
    public function profile(){
        return view('members.profile');
    }

    // Update Member Profile
    public function updateProfile(Request $request){
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'photo'=>'image|mimes:jpeg,jpg,png,gif',
            'designation'=>'required'
        ]);

        $member = Auth::user();
        if($request->hasFile('photo')){
            $pho = $request->file('photo');
            $member->photo = $pho->getClientOriginalName();
            $pho->move('img',$pho->getClientOriginalName());
        }

        DB::table('members')
            ->where('id', $member->id)
            ->update(['current_designation' => $request->designation, 'contact' => $request->contact, 'photo' => $member->photo]);
        session()->flash('action_message', 'Profile updated successfully!!');
        return redirect()->back();
    }

}

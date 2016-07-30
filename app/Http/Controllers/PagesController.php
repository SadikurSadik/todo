<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
      return view('pages.home');
    }

    public function about()
    {
      return view('pages.about');
    }

    public function contact()
    {
      return view('pages.contact');
    }

    public function login()
    {
      if(Auth::check()){
        return redirect()->route('dashboard');
      }
      return view('pages.login');
    }

    public function postLogin(Request $request)
    {

      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'message'=>'required'
      ]);
      $request->flash();
      return redirect()->back();
    }

}

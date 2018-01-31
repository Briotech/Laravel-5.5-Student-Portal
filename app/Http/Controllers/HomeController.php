<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\User;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
       $users = User::all();
       return view ('welcome',compact('users'));
    }


    public function create()
    {
      return view ('create');
    }


    public function store(Request $request)
    {
     $this->validate($request,[
       'firstname' => 'required',
       'lastname' => 'required',
       'email' => 'required',
       'phone' => 'required'
     ]);
     $student = new Student;
     $student->first_name = $request->firstname;
     $student->last_name = $request->lastname;
     $student->email = $request->email;
     $student->phone = $request->phone;
     $student->save();
     return back();
    }
  }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faculty;

class FacultyController extends Controller
{

  public function index()
  {
    return view ('home');
  }

  public function login()
  {
     $users = User::all();
     return view ('welcome',compact('users'));
  }

  public function create_faculty()
  {
     return view ('create_faculty');
  }

  public function store_faculty(Request $request)
  {

    $faculty = new Faculty;
    $faculty->first_name = $request->firstname;
    $faculty->last_name = $request->lastname;
    $faculty->email = $request->email;
    $faculty->phone = $request->phone;
    $faculty->save();
    return back();
  }

  public function facultylist()
  {
    $faculties= Faculty::all();
    return view ('facultylist',compact('faculties'));
  }

  public function edit_faculty()
  {
    $faculties= Faculty::all();
    return view ('edit_faculty',compact('faculties'));
  }


  public function edit2_faculty(Request $request,$id)
  {
      $faculty = Faculty::find($id);
      return view('edit2_faculty',compact('faculty'));
  }

  public function update_faculty(Request $request,$id)
  {

   $faculty = Faculty::find($id);
   $faculty->first_name = $request->firstname;
   $faculty->last_name = $request->lastname;
   $faculty->email = $request->email;
   $faculty->phone = $request->phone;
   $faculty->save();
   return redirect(route('facultylist'))->with('successMsg','faculty Successfully Update');
  }

  public function delete_faculty($id)
  {
    Faculty::find($id)->delete_faculty();
    return redirect(route('facultylist'))->with('successMsg','faculty Successfully Delete');
  }


}

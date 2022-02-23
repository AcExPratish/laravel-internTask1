<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Module;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

//    public function index()
//    {
//
//    }

    public function createView(Request $request)
    {
        $modules = Module::all();
        $faculties = Faculty::all();
        return view('add', [
            'modules' => $modules,
            'faculties' => $faculties
        ]);
    }

    public function create()
    {
        $attributes = request()->validate([
            'name' => 'required|min:8|max:255',
            'address' => 'required|min:8|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phoneNumber' => 'required|numeric|digits:10',
            'nationality' => 'required',
            'date' => 'required|date',
            'faculty' => 'required',
            'module' => 'required',
            'gender' => 'required'
        ]);

        User::create($attributes);

        return redirect('/');
    }

    public function show()
    {
        $users = User::orderBy('id','ASC')->paginate(1);
        return view( 'show',[
            'users' => $users
        ]);
    }

//    public function edit($id)
//    {
//        //
//    }

//    public function update(Request $request, $id)
//    {
//        //
//    }

//    public function destroy($id)
//    {
//        //
//    }
}

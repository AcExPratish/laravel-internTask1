<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Module;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

//    public function index()
//    {
//
//    }

    public function createView(Request $request)
    {
        $faculties['faculty'] = DB::table('faculties')->orderBy('name','asc')->get();
        return view('add', $faculties);
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

    public function getState(Request $request){
        $fid = $request->post('fid');
        $modules=DB::table('modules')->where('faculties_id',$fid)->orderBy('name','asc')->get();
        $html = '<option selected disabled>Please select a faculty</option>';
        foreach($modules as $module)
        {
            $html .= '<option value="'.$module->id.'">'.$module->name.'</option>';
        }
        echo $html;
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LecturerController extends Controller
{
    public function showlecturers(){
        return view('admin.lecturer');
              
    }
    
    public function add_lecturer(){
        return view('admin.add_lecturer');
              
    }

    public function register_lecturer(Request $request)
    {
        $lecturer=new User;

        $lecturer->name=$request->name;
        $lecturer->IC=$request->IC;
        $lecturer->email=$request->email;
        $lecturer->phoneNum=$request->phoneNum;
        $lecturer->userType='lecturer';
        $lecturer->password=Hash::make($request->password);

        $lecturer->save();

        return redirect()->back();
    }
}

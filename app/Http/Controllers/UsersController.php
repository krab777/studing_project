<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\deleteUser;

class UsersController extends Controller
{
	public function showAll()
	{
       $users = Users::all();
       return view('users', ['users' => $users]);
	}

    public function deleteUser($id) {
        $user_obj = new Users();
        $users = $user_obj->deleteStudent($id);
        return redirect()->back();
        //return view('students', ['students'=>$students]);
    }

}

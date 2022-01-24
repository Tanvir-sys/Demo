<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userList()
    {
        if(User::userType=='0'){}
        $user=User::orderby('id','desc')->paginate(10);
        return view('Admin.userlist', compact('user')); //function for show user list
    }

    public function userListupdate($id){
        $user=User::find($id);
        return view('Admin.userlist',compact('user'));
    }

    public function userListupdatep(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|email',
        ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return redirect()->route('Admin.userlist');
    }

    public function UserListdelete($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->route('UserList');
    }


    public function fileupload()
    {
         return view('');

    }


}

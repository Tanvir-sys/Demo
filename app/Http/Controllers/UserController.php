<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userList()
    {


        $users=User::orderby('id','desc')->paginate(2);
        return view('Admin.userlist', compact('users')); // for show user list
    }

    public function userListupdate($id){
        $user=User::find($id);
        return view('Admin.userupdate',compact('user'));
    }

    public function userListupdatep(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|string',             //for validated userlist update
            'email'=>'required|email',
        ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return redirect()->route('UserList')->with('success','User Updated');
    }

    public function UserListdelete($id){
        $user=User::find($id);                          //for user list deletion
        $user->delete();
        return redirect()->route('UserList')->with('success','User Delete');
    }





}

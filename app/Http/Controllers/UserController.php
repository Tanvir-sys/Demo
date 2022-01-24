<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userList()
    {
        $user=User::all();
        return view('Admin.userlist', compact('user')); //function for show user list
    }
    public function fileupload()
    {
         return view('');

    }


}

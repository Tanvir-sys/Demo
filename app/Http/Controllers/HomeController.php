<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fileUpload;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $files=fileUpload::orderby('id','desc')->paginate(2);
        return view('home',compact('files'));
    }
    public function createFile(Request $request)
    {
        $data=new fileUpload;
        if($request->file('file')){
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/'.$filename);
            $data->file=$filename;


        }
         $data->name=$request->name;
         $data->file=$request->file;
         $data->save();
         return redirect()->route('fileupload')->with('success','File Upload successfuly');


    }
    public function fileupload(){

        return view ('fileupload');

    }
}

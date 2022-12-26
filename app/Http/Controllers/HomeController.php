<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function welcome()
    {
        return view('welcome');
    }
    
    public function index()
    {
        return view('home');
    }



    public function uploaddata(Request $request)
    {
        $student=new Student;
        
        $student->name=$request->name;
        $student->email=$request->email;

        // image request bring for work
        $image=$request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('studentimage',$imagename);
            $student->image=$imagename;
        }

        $student->save();
        return redirect()->back();
    }

    public function viewdata()
    {
        $data = student::all();
        return view('display',compact('data'));
    }

}

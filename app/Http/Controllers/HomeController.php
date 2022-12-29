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

    public function delete($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $search = $request ->search;
        $data = student::where('name','Like','%'.$search.'%')->orwhere('email','Like','%'.$search.'%')->get();
        return view('display',compact('data'));
    }

    public function update_view($id)
    {
        $student = Student::find($id);
        return view('update_page',compact('student'));
    }

    public function update_data(Request $request, $id)
    {
        $student = Student::find($id);

        $student -> name = $request -> name;
        $student -> email = $request -> email;

        $image = $request ->file;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('studentimage',$imagename);
            $student -> image = $imagename;
        }

        $student->save();
        return redirect()->back();

        // return view('update_page',compact('student'));
    }

}

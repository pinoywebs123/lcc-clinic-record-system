<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function student_create(Request $request){
    	
        $request->validate(['student_id'=> 'required|unique:students']);

        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

    	  $data = $request->all();
    	  $data['image'] = $name;
    	  
    	 //return $request->all();
    	 Student::create($data);
    	 return redirect()->back()->with('suc','New Student Successfully Added!!');
    }
}

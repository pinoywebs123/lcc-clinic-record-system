<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function employee_create(Request $request){
    	//You can used SOLID Principles for this one. But for the sake of this review coding ito lang muna gagawin natin.
        $request->validate(['employee_id'=> 'required|unique:employees']);

    	$image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

    	  $data = $request->all();
    	  $data['image'] = $name;

    	 Employee::create($data);
    	 return redirect()->back()->with('suc','Employee Successfully added!');
    }
}

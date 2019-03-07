<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Student;
use App\Employee;
use App\User;

class AdminController extends Controller
{
    public function admin_home(){
        $student_count = Student::count();
        $employee_count = Employee::count();
    	return view('admin.home',compact('student_count','employee_count'));
    }

    public function admin_logout(){
    	Auth::logout();
    	return redirect('/');
    }

    public function admin_student_list(){
        $students = Student::all();
    	return view('admin.students',['students'=> $students]);
    }

    public function admin_employee_list(){
        $employees = Employee::all();
    	return view('admin.employees',['employees'=> $employees]);
    }

    public function admin_get_student(Request $request){
        return Student::findOrFail($request->studId);
    }

    public function admin_get_employee(Request $request){
        return Employee::findOrFail($request->employeeId);
    }

    public function admin_change_password(){
        return view('admin.change_password');
    }

    public function admin_change_password_check(Request $request){
        $validatedData = $request->validate([
            'password' => 'required',
            'repeat_password' => 'same:password',
        ]);

        $find = User::findOrFail(Auth::id());
        $find->update(['password'=> bcrypt($request->password)]);
        return redirect()->back()->with('suc','Password Changed successfully!');
    }
}

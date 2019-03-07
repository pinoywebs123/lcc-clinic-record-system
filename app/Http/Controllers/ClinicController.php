<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserClinic;
use App\EmployeeClinic;
use App\Student;
use App\Employee;
use PDF;

class ClinicController extends Controller
{
    public function clinic_student_list(){
    	$students = Student::all();
    	return view('admin.clinic.student',compact('students'));
    }

    public function clinic_employee_list(){
    	$employees = Employee::all();
    	return view('admin.clinic.employee',compact('employees'));
    }

    public function clinic_create_student(Request $request){

    	UserClinic::create($request->all());
    	return redirect()->back()->with('suc','Student successfully recorded!');
    }

    public function clinic_create_employee(Request $request){

    	EmployeeClinic::create($request->all());
    	return redirect()->back()->with('suc','Employee successfully recorded!');
    }

    public function clinic_view_student($id){
        $find = Student::find($id);
        $pdf = PDF::loadView('admin.clinic.view_certificate',compact('find'))->setPaper('a4', 'portrait');
  
        

        return $pdf->stream('testfile')
               ->header('Content-Type','application/pdf');
    }

    public function clinic_view_employee($id){
        $find = Employee::find($id);
        $pdf = PDF::loadView('admin.clinic.employee_certificate',compact('find'))->setPaper('a4', 'portrait');
  
        

        return $pdf->stream('testfile')
               ->header('Content-Type','application/pdf');
    }
}

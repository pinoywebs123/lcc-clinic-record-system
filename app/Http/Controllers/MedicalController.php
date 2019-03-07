<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Employee;
use App\UserMedical;
use App\EmployeeMedical;
use PDF;

class MedicalController extends Controller
{
    public function medical_student_list(){
        $students = Student::all();
    	return view('admin.medical.student',compact('students'));
    }

    public function medical_employee_list(){
        $employees = Employee::all();
    	return view('admin.medical.employee',compact('employees'));
    }

    public function medical_student_view($id){
    	$find = Student::find($id);
    	return view('admin.student_medical',compact('find'));
    }

    public function medical_student_view_create(Request $request,$id){
    	$request->merge(['user_id'=> $id]);
    	UserMedical::create($request->all());

    	return redirect()->back()->with('suc','Student Medical Profile Saved!');
    }

    public function medical_employee_view($id){
    	$find = Employee::find($id);
    	return view('admin.employee_medical',compact('find'));
    }

    public function medical_employee_view_create(Request $request, $id){
    	$request->merge(['user_id'=> $id]);
    	EmployeeMedical::create($request->all());

    	return redirect()->back()->with('suc','Employee Medical Profile Saved!');

    }

    public function medical_student_print($id){
        $find = Student::find($id);
         $pdf = PDF::loadView('admin.medical.student_view',compact('find'))->setPaper('a4', 'portrait');
         return $pdf->stream('testfile')
               ->header('Content-Type','application/pdf');
        //return view('admin.medical.student_view',compact('find'));
    }

    public function medical_employee_print($id){
        $find = Employee::find($id);
        $pdf = PDF::loadView('admin.medical.employee_view',compact('find'))->setPaper('a4', 'portrait');
         return $pdf->stream('testfile')
               ->header('Content-Type','application/pdf');
        //return view('admin.medical.employee_view',compact('find'));
    }
}

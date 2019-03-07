<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EmployeeMedical;

class Employee extends Model
{
    protected $guarded = [];

    public function employee_clinic(){
    	return $this->hasOne('App\EmployeeClinic','user_id','id');
    }

    public function employee_medical(){
    	return $this->hasOne('App\EmployeeMedical','user_id','id');
    }

     public function getEmployeeMedical($id){
        return EmployeeMedical::where('user_id',$id)->get();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserMedical;


class Student extends Model
{
    protected $guarded = [];

    public function student_clinic(){
    	return $this->hasOne('App\UserClinic','user_id','id');
    }

    public function student_medical(){
    	return $this->hasMany('App\UserMedical','user_id','id');
    }

    public function getStudentMedical($id){
    	return UserMedical::where('user_id',$id)->get();
    }

   
}

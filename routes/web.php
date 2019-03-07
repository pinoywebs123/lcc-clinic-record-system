<?php


Route::get('/', function () {
    return redirect()->route('login');
});


Route::group(['prefix'=> 'auth'], function (){

	Route::get('login', [
		'as'	=> 'login',
		'uses'	=> 'AuthController@login'
	]);	
	Route::post('login_check', [
		'as'	=> 'login_check',
		'uses'	=> 'AuthController@login_check'
	]);	


});

Route::group(['prefix'=> 'admin'], function(){

	Route::get('/home', [
		'as'	=> 'admin_home',
		'uses'	=>	'AdminController@admin_home'
	]);
	Route::get('/logout', [
		'as'	=> 'admin_logout',
		'uses'	=>	'AdminController@admin_logout'
	]);

	Route::get('/admin_change_password', [
		'as'=> 'admin_change_password',
		'uses'=> 'AdminController@admin_change_password'
	]);
		Route::post('/admin_change_password',[
			'as'=> 'admin_change_password_check',
			'uses'=> 'AdminController@admin_change_password_check'
		]);
	Route::get('/students-list', [
		'as'	=> 'admin_student_list',
		'uses'	=>	'AdminController@admin_student_list'
	]);
	Route::get('/employee-list', [
		'as'	=> 'admin_employee_list',
		'uses'	=>	'AdminController@admin_employee_list'
	]);
	Route::post('/get-student', [
		'as'	=> 'admin_get_student',
		'uses'	=>	'AdminController@admin_get_student'
	]);
	Route::post('/get-employee', [
		'as'	=> 'admin_get_employee',
		'uses'	=>	'AdminController@admin_get_employee'
	]);

	//Admin Clinic

	Route::get('/clinic-student-list', [
		'as'	=> 'clinic_student_list',
		'uses'	=>	'ClinicController@clinic_student_list'
	]);
	Route::post('/clinic-create-student', [
		'as'	=> 'clinic_create_student',
		'uses'	=>	'ClinicController@clinic_create_student'
	]);
	Route::get('/clinic-employee-list', [
		'as'	=> 'clinic_employee_list',
		'uses'	=>	'ClinicController@clinic_employee_list'
	]);
	Route::post('/clinic-create-employee', [
		'as'	=> 'clinic_create_employee',
		'uses'	=>	'ClinicController@clinic_create_employee'
	]);

	Route::get('/clinic-view-student/{id}', [
		'as'=> 'clinic_view_student',
		'uses'=> 'ClinicController@clinic_view_student'
	]);

	Route::get('/clinic-view-employee/{id}', [
		'as'=> 'clinic_view_employee',
		'uses'=> 'ClinicController@clinic_view_employee'
	]);

	//Admin Medical
	Route::get('/medical-student-list', [
		'as'	=> 'medical_student_list',
		'uses'	=>	'MedicalController@medical_student_list'
	]);

	Route::get('/medical-student-view/{id}', [
		'as'	=> 'medical_student_view',
		'uses'	=>	'MedicalController@medical_student_view'
	]);

	Route::post('/medical-student-view/{id}', [
		'as'	=> 'medical_student_view_create',
		'uses'	=>	'MedicalController@medical_student_view_create'
	]);

	Route::get('/medical-employee-list', [
		'as'	=> 'medical_employee_list',
		'uses'	=>	'MedicalController@medical_employee_list'
	]);

	Route::get('/medical-employee-view/{id}', [
		'as'	=> 'medical_employee_view',
		'uses'	=>	'MedicalController@medical_employee_view'
	]);

	Route::post('/medical-employee-view/{id}', [
		'as'	=> 'medical_employee_view_create',
		'uses'	=>	'MedicalController@medical_employee_view_create'
	]);

	Route::get('/medical-student-print/{id}', [
		'as'=> 'medical_student_print',
		'uses'=> 'MedicalController@medical_student_print'
	]);

	Route::get('/medical-employee-print/{id}', [
		'as'=> 'medical_employee_print',
		'uses'=> 'MedicalController@medical_employee_print'
	]);

	//Student Logic
	Route::post('/student-create', [
		'as'	=> 'student_create',
		'uses'	=>	'StudentController@student_create'
	]);

	//Employee Logic
	Route::post('/employee-create', [
		'as'	=> 'employee_create',
		'uses'	=>	'EmployeeController@employee_create'
	]);



});
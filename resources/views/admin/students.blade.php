@extends('admin.template')

@section('styles')
<script src="{{URL::to('tables/jquery-1.12.3.js')}}"></script>
<script src="{{URL::to('tables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to('tables/dataTables.bootstrap.min.js')}}"></script>   
  
  <link rel="stylesheet" href="{{URL::to('tables/dataTables.bootstrap.min.css')}}">
@endsection

@section('contents')
	<h3 class="text-center">Student List</h3>
	
	@include('Shared.notification')
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">New Student</button>
	<table class="table" id="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Contact</th>
				<th>DOB</th>
				<th>Address</th>
				<th>Year</th>
				<th>Course</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $stud)
				<tr>
					<td>{{$stud->student_id}}</td>
					<td>{{$stud->first_name}} {{$stud->middle_name}} {{$stud->last_name}}</td>
					<td>{{$stud->gender}}</td>
					<td>{{$stud->contact}}</td>
					<td>{{$stud->dob}}</td>
					<td>{{$stud->address}}</td>
					<td>{{$stud->year}}</td>
					<td>{{$stud->course}}</td>
					<td>
						<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2" value="{{$stud->id}}">Clinic</button>
						<a href="{{route('medical_student_view',$stud->id)}}" class="btn btn-danger btn-xs">Medical</a>
					</td>
				</tr>	
			@endforeach
		</tbody>
	</table>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student Informations</h4>
      </div>
       <form action="{{route('student_create')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      		<div class="row">
      			<div class="col-md-12">
	      			<div class="form-group">
			       		<label>Student ID</label>
			       		<input type="text" name="student_id" class="form-control" required="">
			       	</div>
		       	</div>
      		</div>
	       	<div class="row">
	       		<div class="col-md-4">
		       		<div class="form-group">
		       			<label>First Name</label>
		       			<input type="text" name="first_name" class="form-control" required="">
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Middle Name</label>
		       			<input type="text" name="middle_name" class="form-control" required="">
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Last Name</label>
		       			<input type="text" name="last_name" class="form-control" required="">
		       		</div>
		       	</div>
	       	</div>

	       	<div class="row">
	       		<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Date of Birth</label>
		       			<input type="date" name="dob" class="form-control" required="">
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Contact</label>
		       			<input type="text" name="contact" class="form-control" required="">
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Emergency Contact</label>
		       			<input type="text" name="emergency" class="form-control" required="">
		       		</div>
		       	</div>
	       	</div>

	       	<div class="row">
	       		<div class="col-md-6">
		       		<div class="form-group">
		       			<label>Email</label>
		       			<input type="email" name="email" class="form-control" required="">
		       		</div>
		       	</div>
		       	<div class="col-md-6">
		       		<div class="form-group">
		       			<label>Address</label>
		       			<input type="text" name="address" class="form-control" required="">
		       		</div>
		       	</div>
		       
	       	</div>

	       	<div class="row">
	       		<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Gender</label>
		       			<select class="form-control" name="gender" required="">
		       				<option value="MALE">MALE</option>
		       				<option value="FEMALE">FEMALE</option>
		       			</select>
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Course</label>
		       			<select class="form-control" name="course" required="">
		       				<option value="GRADE">GRADE</option>
		       				<option value="K">K</option>
		       				<option value="BSIT">BSIT</option>
		       				<option value="BSCS">BSCS</option>
		       				<option value="ABM">ABM</option>
		       				<option value="HUMSS">HUMSS</option>
		       				<option value="STEM">STEM</option>
		       				<option value="GAS">GAS</option>
		       				<option value="H.E">H.E</option>
		       				<option value="ICT">ICT</option>
		       				<option value="BSED">BSED</option>
		       				<option value="BSBA">BSBA</option>
		       				<option value="Agri-Business">Agri-Business</option>
		       				<option value="BSHRM">BSHRM</option>
		       				<option value="BSMA">BSMA</option>
		       				<option value="BSBIO">BSBIO</option>
		       			</select>
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Year</label>
		       			<select class="form-control" name="year" required="">
		       				<option value="I">I</option>
		       				<option value="II">II</option>
		       				<option value="III">III</option>
		       				<option value="IV">IV</option>
		       				<option value="IV">V</option>
		       				<option value="VI">VI</option>
		       				<option value="VII">VII</option>
		       				<option value="VIII">VIII</option>
		       				<option value="IX">IX</option>
		       				<option value="X">X</option>
		       				<option value="XI">XI</option>
		       				<option value="XII">XII</option>
		       			</select>
		       		</div>
		       	</div>
	       	</div>
	       	<div class="row">
	       		<div class="col-md-12">
	       			<div class="form-group">
	       				<label>Browse Image</label>
	       				<input type="file" name="image" class="form-control" required="">
	       			</div>
	       		</div>
	       	</div>

       
      </div>
      <div class="modal-footer">
      	@csrf
        <button type="submit" class="btn btn-primary btn-block" >SUBMIT</button>
      </div>
      </form>
    </div>

  </div>
</div>


<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student Clinic Visit Form</h4>
      </div>
       <form action="{{route('clinic_create_student')}}" method="POST">
      <div class="modal-body">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="form-group">
      					<p id="image" class="text-center">
      						
      					</p>
      				</div>
	      			<div class="form-group">
			       		<label>Student ID</label>
			       		<input type="text" name="student_id" class="form-control" required="" id="student_id" disabled="">
			       		<input type="hidden" name="user_id" id="user_id">
			       	</div>
		       	</div>
      		</div>
	       	<div class="row">
	       		<div class="col-md-4">
		       		<div class="form-group">
		       			<label>First Name</label>
		       			<input type="text" name="first_name" class="form-control" required="" id="first_name" disabled="">
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Middle Name</label>
		       			<input type="text" name="middle_name" class="form-control" required="" id="middle_name" disabled="">
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Last Name</label>
		       			<input type="text" name="last_name" class="form-control" required="" id="last_name" disabled="">
		       		</div>
		       	</div>
	       	</div>

	       	<div class="row">
	       		<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Grade/Section</label>
		       			<input type="text" name="grade_section" class="form-control" required="" id="grade_section" >
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Date/Time</label>
		       			<input type="date" name="date_time" class="form-control" required="" id="date_time" >
		       		</div>
		       	</div>
		       	<div class="col-md-4">
		       		<div class="form-group">
		       			<label>Subject Teacher</label>
		       			<input type="text" name="subject_teacher" class="form-control" required="" id="subject_teacher" >
		       		</div>
		       	</div>
	       	</div>

	       <div class="row">
      			<div class="col-md-12">
	      			<div class="form-group">
			       		<label>Complaint</label>
			       		<input type="text" name="complain" class="form-control" required="" id="complain" >
			       	</div>
		       	</div>
      		</div>

      		<div class="row">
      			<div class="col-md-12">
	      			<div class="form-group">
			       		<label>School Nurse Assesment</label>
			       		<input type="text" name="nurse_assesment" class="form-control" required="" id="nurse_assesment" >
			       	</div>
		       	</div>
      		</div>

      	<div class="row">
      			<div class="col-md-12">
	      			<div class="form-group">
			       		<label>Actions Taken</label>
			       		<input type="text" name="action_taken" class="form-control" required="" id="action_taken" >
			       	</div>
		       	</div>
      		</div>	

	     <div class="row">
      			<div class="col-md-12">
	      			<div class="form-group">
			       		<label>Attending School Nurse</label>
			       		<input type="text" name="school_nurse" class="form-control" required="" id="school_nurse" value="Mrs. Morgan, RN" >
			       	</div>
		       	</div>
      		</div>  
	       	

       
      </div>
      <div class="modal-footer">
      	@csrf
        <button type="submit" class="btn btn-primary btn-block" >SUBMIT</button>
      </div>
      </form>
    </div>

  </div>
</div>

@endsection

@section('scripts')
	<script>
		var token = '{{Session::token()}}';
		var url = '{{route('admin_get_student')}}';

	  $(document).ready(function() {
	    $('#table').DataTable();

	    	$(".btn-info").click(function(){
	    		var studId = $(this).val();	
	    		$(".aw").remove();
	    		$.ajax({
	    			method: 'POST',
	    			url: url,
	    			data: {studId:studId,_token:token},
	    			success: function(msg){
	    				console.log(msg);
	    				$("#student_id").val(msg.student_id);
	    				$("#first_name").val(msg.first_name);
	    				$("#middle_name").val(msg.middle_name);
	    				$("#last_name").val(msg.last_name);
	    				$("#grade_section").val(msg.course + msg.year);
	    				$("#user_id").val(msg.id);
	    $("#image").append('<img src="{{URL::to('images')}}/'+msg.image+'" width="80px" class="aw">');

	    			}
	    		})
	    		
	    	});
	    
	  } );
 </script>
 
@endsection
@extends('admin.template')

@section('styles')
<script src="{{URL::to('tables/jquery-1.12.3.js')}}"></script>
<script src="{{URL::to('tables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to('tables/dataTables.bootstrap.min.js')}}"></script>   
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
	<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">New Employee</button>
	<table class="table" id="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Contact</th>
				<th>DOB</th>
				<th>Address</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $emp)
				<tr>
					<td>{{$emp->employee_id}}</td>
					<td>{{$emp->first_name}} {{$emp->middle_name}} {{$emp->last_name}}</td>
					<td>{{$emp->gender}}</td>
					<td>{{$emp->contact}}</td>
					<td>{{$emp->dob}}</td>
					<td>{{$emp->address}}</td>
					<td>
						<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2" value="{{$emp->id}}">Clinic</button>
						<a href="{{route('medical_employee_view',$emp->id)}}" class="btn btn-danger btn-xs">Medical</a>
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
        <h4 class="modal-title">Employee Informations</h4>
      </div>
       <form action="{{route('employee_create')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      		<div class="row">
      			<div class="col-md-12">
	      			<div class="form-group">
			       		<label>Employee ID</label>
			       		<input type="text" name="employee_id" class="form-control" required="">
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
	       		
		       	<div class="col-md-12">
		       		<div class="form-group">
		       			<label>Address</label>
		       			<textarea name="address" class="form-control" required=""></textarea>
		       		</div>
		       	</div>
		       
	       	</div>

	       	<div class="row">
	       		<div class="col-md-6">
		       		<div class="form-group">
		       			<label>Gender</label>
		       			<select class="form-control" name="gender" required="">
		       				<option value="MALE">MALE</option>
		       				<option value="FEMALE">FEMALE</option>
		       			</select>
		       		</div>
		       	</div>

		       	<div class="col-md-6">
		       		<div class="form-group">
		       			<label>Email</label>
		       			<input type="email" name="email" class="form-control" required="">
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
        <h4 class="modal-title">Employee Clinic Visit Form</h4>
      </div>
       <form action="{{route('clinic_create_employee')}}" method="POST">
      <div class="modal-body">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="form-group">
      					<p id="image" class="text-center">
      						
      					</p>
      				</div>
	      			<div class="form-group">
			       		<label>Employee ID</label>
			       		<input type="text" name="employee_id" class="form-control" required="" id="employee_id" disabled="">
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
	       		
		       	<div class="col-md-6">
		       		<div class="form-group">
		       			<label>Date/Time</label>
		       			<input type="date" name="date_time" class="form-control" required="" id="date_time" >
		       		</div>
		       	</div>
		       	<div class="col-md-6">
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
		var url = '{{route('admin_get_employee')}}';
			
	  $(document).ready(function() {
	    $('#table').DataTable();

	    $(".btn-info").click(function(){
	    		var employeeId = $(this).val();	
	    		$(".aw").remove();
	    		$.ajax({
	    			method: 'POST',
	    			url: url,
	    			data: {employeeId:employeeId,_token:token},
	    			success: function(msg){
	    				console.log(msg);
	    				$("#employee_id").val(msg.employee_id);
	    				$("#first_name").val(msg.first_name);
	    				$("#middle_name").val(msg.middle_name);
	    				$("#last_name").val(msg.last_name);

	    				$("#user_id").val(msg.id);
	    				$("#image").append('<img src="{{URL::to('images')}}/'+msg.image+'" width="80px" class="aw">');
	    			}
	    		})
	    		
	    	});

	    
	  } );
 </script>
 
@endsection
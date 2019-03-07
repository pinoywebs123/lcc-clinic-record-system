@extends('admin.template')

@section('styles')
<script src="{{URL::to('tables/jquery-1.12.3.js')}}"></script>
@endsection

@section('contents')
<ul class="nav nav-tabs">
  <li ><a href="{{route('medical_student_list')}}">Student</a></li>
  <li class="active"><a href="{{route('medical_employee_list')}}">Employee</a></li>
</ul>
	<div>
		<form>
			<input type="date" name="start">
			<input type="date" name="end">
			@csrf
			<input type="submit" value="generate">
		</form>
	</div>
	

	<table class="table" id="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>GENDER</th>
				<th>CONTACT</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $emp)
				
				@if($emp->employee_medical)
					<tr>
						<td>{{$emp->employee_id}}</td>
						<td>{{$emp->first_name}} {{$emp->last_name}}</td>
						
						<td>{{$emp->gender}}</td>
						<td>{{$emp->contact}}</td>
						<td>
							<a href="{{route('medical_employee_print', $emp->id)}}" class="btn btn-info btn-xs">View</a>
						</td>
					</tr>
				@endif
				
			@endforeach
		</tbody>
	</table>

@endsection

@section('scripts')

@endsection
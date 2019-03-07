@extends('admin.template')

@section('styles')
<script src="{{URL::to('tables/jquery-1.12.3.js')}}"></script>
@endsection

@section('contents')
<ul class="nav nav-tabs">
  <li class="active"><a href="{{route('medical_student_list')}}">Student</a></li>
  <li><a href="{{route('medical_employee_list')}}">Employee</a></li>
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
				<th>COURSE/YEAR</th>
				<th>GENDER</th>
				<th>CONTACT</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $stud)
				
				@if($stud->student_medical)
					<tr>
						<td>{{$stud->student_id}}</td>
						<td>{{$stud->first_name}} {{$stud->last_name}}</td>
						<td>{{$stud->course}} - {{$stud->year}}</td>
						<td>{{$stud->gender}}</td>
						<td>{{$stud->contact}}</td>
						<td>
							<a href="{{route('medical_student_print',$stud->id)}}" class="btn btn-info btn-xs">View</a>
						</td>
					</tr>
				@endif
				
			@endforeach
		</tbody>
	</table>
@endsection

@section('scripts')

@endsection
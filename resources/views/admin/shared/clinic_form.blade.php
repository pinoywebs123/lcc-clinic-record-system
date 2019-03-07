@extends('admin.template')
<script src="{{URL::to('tables/jquery-1.12.3.js')}}"></script>
@section('styles')

@endsection

@section('contents')
	<div class="col-md-4">
		<div class="panel panel-primary">
		    <div class="panel-heading">Students</div>
		    <div class="panel-body">
		    	<span class="badge">{{$student_count}}</span>
		    </div>
		    
		  </div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-danger">
		    <div class="panel-heading">Employees</div>
		    <div class="panel-body">
		    	<span class="badge">{{$employee_count}}</span>
		    </div>
		    
		  </div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-warning">
		    <div class="panel-heading">Date</div>
		    <div class="panel-body">
		    	{{ Carbon\Carbon::now()->toDayDateTimeString()}}
		    </div>
		    
		  </div>
	</div>
@endsection

@section('scripts')

@endsection
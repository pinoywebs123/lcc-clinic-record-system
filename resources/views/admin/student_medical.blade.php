@extends('admin.template')
<script src="{{URL::to('tables/jquery-1.12.3.js')}}"></script>
@section('styles')

@endsection

@section('contents')
	<h1 class="text-center">Medical Profile</h1>
	<div class="col-md-12">
		@if(Session::has('suc'))
			<div class="alert alert-success">
				{{Session::get('suc')}}
			</div>
		@endif
		<table class="table">
			<thead>
				<tr>
					<th>Name: {{$find->first_name}} {{$find->last_name}}</th>
					<th>Date of Birth: {{$find->dob}}</th>
				</tr>
				<tr>
					
					<th>Address: {{$find->address}}</th>
				</tr>
			</thead>
		</table>

	</div>

	<form action="{{route('medical_student_view_create',Request::segment(3))}}" method="POST">
	
	<div class="col-md-4 col-md-offset-4">
		<div class="form-group">
				<label>Height</label>
				<input type="text" name="height" class="form-control" required="">
				
			</div>

			<div class="form-group">
				<label>Weight</label>
				
				<input type="text" name="weight" class="form-control" required="">
			</div>

			<div class="form-group">
				<label>Vision R</label>
				<select name="vision_r" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Vision L</label>
				<select name="vision_l" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Hearing R</label>
				<select name="hearing_r" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Hearing L</label>
				<select name="hearing_l" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Speech</label>
				<select name="speech" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Nasal Breathings</label>
				<select name="nasal" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Pediculosis</label>
				<select name="pediculosis" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Eye</label>
				<select name="eye" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Ear</label>
				<select name="ear" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Nose</label>
				<select name="nose" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Teeth</label>
				<select name="teeth" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Mouth Hygiene</label>
				<select name="mouth" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Tonsils</label>
				<select name="tonsils" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Throat</label>
				<select name="throat" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Cervical Glands</label>
				<select name="cervical" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Skin</label>
				<select name="skin" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Lungs</label>
				<select name="lungs" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Heart</label>
				<select name="heart" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Thyroid Gland</label>
				<select name="thyroid" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Adenoids</label>
				<select name="adenoids" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Spleen</label>
				<select name="spleen" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Nutrition</label>
				<select name="nutrition" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Deformities</label>
				<select name="deformities" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Posture</label>
				<select name="posture" class="form-control" required="">
					<option value="">Select</option>
					<option value="O">O</option>
					<option value="XO">XO</option>
					<option value="XX">XX</option>
					<option value="XXX">XXX</option>
				</select>
			</div>

			<div class="form-group">
				<label>Measles</label>
				<select name="measles" class="form-control" required="">
					<option value="">Select</option>
					<option value="YES">YES</option>
					<option value="NO">NO</option>
				</select>
			</div>

			<div class="form-group">
				<label>Mumps</label>
				<select name="mumps" class="form-control" required="">
					<option value="">Select</option>
					<option value="YES">YES</option>
					<option value="NO">NO</option>
				</select>
			</div>

			<div class="form-group">
				<label>Diptheria</label>
				<select name="diptheria" class="form-control" required="">
					<option value="">Select</option>
					<option value="YES">YES</option>
					<option value="NO">NO</option>
				</select>
			</div>

			<div class="form-group">
				<label>Pertusis</label>
				<select name="pertusia" class="form-control" required="">
					<option value="">Select</option>
					<option value="YES">YES</option>
					<option value="NO">NO</option>
				</select>
			</div>

			<div class="form-group">
				<label>Small Pox</label>
				<select name="small_pox" class="form-control" required="">
					<option value="">Select</option>
					<option value="YES">YES</option>
					<option value="NO">NO</option>
				</select>
			</div>

			<div class="form-group">
				<label>Chicken Pox</label>
				<select name="chicken_pox" class="form-control" required="">
					<option value="">Select</option>
					<option value="YES">YES</option>
					<option value="NO">NO</option>
				</select>
			</div>

			<div class="form-group">
				<label>Typhoid</label>
				<select name="typhoid" class="form-control" required="">
					<option value="">Select</option>
					<option value="YES">YES</option>
					<option value="NO">NO</option>
				</select>
			</div>

			<div class="form-group">
				<label>Severe Physical  Injury</label>
				<select name="physical_injury" class="form-control" required="">
					<option value="">Select</option>
					<option value="YES">YES</option>
					<option value="NO">NO</option>
				</select>
			</div>

			<div class="form-group">
				@csrf
				<button type="submit" class="btn btn-primary btn-sm">SUBMIT</button>
				<a href="{{route('medical_student_view',Request::segment(3))}}" class="btn btn-default btn-sm">CLEAR</a>
			</div>
	</div>

	</form>
	
@endsection

@section('scripts')

@endsection
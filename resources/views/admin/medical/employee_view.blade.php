<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Clinic Record System</title>
	<style>
		td.years:first-of-type {
			margin-left: 100px !important;
		}
		td.years {
			margin-right: 20px !important;
		}
        .left {
            float: left;
        }
        .clearer {
            clear: both;
        }
        img {
            margin-left: 100px;
            margin-top: 20px;
        }

        h5 {
            margin-top: -10px;
        }
	</style>
</head>
<body>
	<header>
		<div class="left">
			<img src="{{URL::to('images/Logo.png')}}" width="100px">
		</div>
        <div class="left" style="margin-left: -380px">
         <h3 style="text-align: center;">La Consolacion College – Bais City</h3>
         <h5 style="text-align: center;">School Clinic</h5>
         <h5 style="text-align: center;">Bais City, Negros Island Region</h5>
         <h5 style="text-align: center;">STUDENT’S CLINIC RECORD</h6>
        </div>
        <div class="clearer"></div>
    </header>

   <div style="margin-top: -20px">
    <p style="display: inline-block">Name: {{$find->first_name}} {{$find->last_name}}</p>
    <p style="display: inline-block; text-align: right; float: right">Date of Birth: {{$find->dob}}</p>
</div>
<div style="position: relative; top: -50px">
    <p style="display: inline-block">Parent/Guardian: </p>
    <p style="display: inline-block; text-align: right; float: right">Address: {{$find->address}}</p>
</div>
<table class="table" style="position: relative; top: -50px; font-size: 12px;">
    <tr>
        <td>Year: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{Carbon\Carbon::parse($aw->created_at)->format('Y')}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Height: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->height}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Weight: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->weight}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Vision R: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->vision_r}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Vision L: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->vision_l}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Hearing R: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->hearing_r}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Hearing L: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->hearing_l}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Speech: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->speech}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Nasal Breathings: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->nasal}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Pediculosis: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->pediculosis}}</td>
        @endforeach
    </tr>
    <tr>
        <td>EYE: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->eye}}</td>
        @endforeach
    </tr>
    <tr>
        <td>EAR: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->ear}}</td>
        @endforeach
    </tr>
    <tr>
        <td>NOSE: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->nose}}</td>
        @endforeach
    </tr>
    <tr>
        <td>TEETH: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->teeth}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Mouth Hygiene: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->mouth}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Tonsils: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->tonsils}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Throat: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->throat}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Cervical Glands: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->cervical}}</td>
        @endforeach
    </tr>
    <tr>
        <td>SKIN: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->skin}}</td>
        @endforeach
    </tr>
    <tr>
        <td>LUNGS: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->lungs}}</td>
        @endforeach
    </tr>
    <tr>
        <td>HEART: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->heart}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Thyroid Gland: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->thyroid}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Adenoids: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->adenoids}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Spleen: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->spleen}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Nutrition: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->nutrition}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Deformities: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->deformities}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Posture: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->posture}}</td>
        @endforeach
    </tr>
    <br>
    <tr>
        <td>Measles: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->measles}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Mumps: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->mumps}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Diptheria: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->diptheria}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Pertusis: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->pertusia}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Small Pox: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->small_pox}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Chicken Pox: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->chicken_pox}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Typhoid: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->typhoid}}</td>
        @endforeach
    </tr>
    <tr>
        <td>Severe Physical  Injury: </td>
        @foreach($find->getEmployeeMedical($find->id) as $aw)
            <td class="years">{{$aw->physical_injury}}</td>
        @endforeach
    </tr>
    
    
</table>
    
<div style="font-size: 10px; margin-top: -50px">
    <h3>Codes: </h3>
    <p class="text-left">O      - Satisfactory</p>
    <p class="text-left">XO     - Requiring Attention – Immediate Action Needed</p>
    <p class="text-left">XX     - Corrected</p>
    <p class="text-left">XXX      - Attempted to be corrected unsuccessfully </p>
</div>  

</div>
</body>
</html>
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

		.page-break {
		    page-break-after: always;
		}
        .line p {
            display: inline;
        }

        th, td {
            padding: 15px 30px;
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

    <content>
        <div class="line" style="margin-top: 50px; position: relative">
        	<p>Name: {{$find->first_name}} {{$find->last_name}}</p>
            <div style="display: inline-block; position: absolute; left: 200px">
            	<p>&nbsp;Date of Birth: {{$find->dob}}</p>
            	<p style="margin-right: 50px">Age: <?php
            		$date_now = date('Y-m-d');
        			$date1=date_create($date_now);
        			$date2=date_create($find->dob);
        			$diff=date_diff($date1,$date2);
        			echo $diff->format("%y");?>
        			
        		</p>
            	<p>Sex: {{$find->gender}}</p>
            </div>
        </div>
    	<div class="line" style="position: relative">
            <p style="display: inline-block; position: absolute; left: 200px">&nbsp;Department: {{$find->course}}-{{$find->year}}</p>
        	<p>Contact number: {{$find->contact}}</p>
        </div>
        
    	<p>Address: {{$find->address}}</p>
    	<p>Medical History: </p>
			
		<hr>	
    
        <table border="1" style="margin-top: 50px; border-collapse: collapse; width: 100%">
            <thead>
                <tr>
                    <th>Date/Time</th>
                    <th>Nurse Assesment Note</th>
                    <th>Diagnosis Doctors Order</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$find->student_clinic->date_time}}</td>
                    <td>{{$find->student_clinic->nurse_assesment}}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    	<hr>

        <table border="1" style="margin-top: 50px; border-collapse: collapse; width: 100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>STAT MEDICATION/DOSE/ROUTE/TIME GIVEN</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$find->student_clinic->date_time}}</td>
                    <td>{{$find->student_clinic->action_taken}}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    	<footer>
    		<p>School Nurse</p>
    		<p>{{$find->student_clinic->school_nurse}}</p>
    	</footer>
    </content>
</body>
</html>
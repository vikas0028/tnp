@extends('regheader')

@section('content')
<script>
    $(document). ready(function (){
    
		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15 // Creates a dropdown of 15 years to control year
		  });
    });
</script> 
<h3 align="center">Student Registration</h3>
 <div class="row">
    <form class="col s12">
    	<h6>Personal Details</h6>
    	<div class="row">
	        <div class="input-field col s12">
	          <input id="password" type="text" class="validate">
	          <label for="password">Enrollment</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s6">
	          <input id="first_name" type="text" class="validate">
	          <label for="first_name">Password</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name">Confirm Password</label>
	        </div>
      	</div>
 		<div class="row">
	        <div class="input-field col s4">
	          <input id="first_name" type="text" class="validate">
	          <label for="first_name">First Name</label>
	        </div>
	        <div class="input-field col s4">
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name">Middle Name</label>
	        </div>
	        <div class="input-field col s4">
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name">Last Name</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s6">
	          <input id="first_name" type="email" class="validate">
	          <label for="first_name">Email</label>
	        </div>
	        <div class="input-field col s6">
	          <input type="date" class="datepicker">
	          <label for="last_name">Date Of Birth</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s12">
	          <input id="password" type="text" class="validate">
	          <label for="password">Street</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s4">
	          <input id="first_name" type="text" class="validate">
	          <label for="first_name">Pincode</label>
	        </div>
	        <div class="input-field col s4">
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name">City</label>
	        </div>
	        <div class="input-field col s4">
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name">State</label>
	        </div>
      	</div>
      	<h6>Education Details</h6>
      	<div class="row">
	      	<div class="input-field col s4">
			    <select required class="validate">
			      <option disabled="" selected>Division</option>
			      <option value="1">Option 1</option>
			      <option value="2">Option 2</option>
			      <option value="3">Option 3</option>
			    </select>
			</div>
			<div class="input-field col s4">
			    <select required class="validate">
			      <option disabled="" selected>Branch</option>
			      <option value="1">Option 1</option>
			      <option value="2">Option 2</option>
			      <option value="3">Option 3</option>
			    </select>
			</div>
			<div class="input-field col s4">
			    <select required class="validate">
			      <option disabled selected>Semester</option>
			      <option value="1">Option 1</option>
			      <option value="2">Option 2</option>
			      <option value="3">Option 3</option>
			    </select>
			</div>
		</div>
		<div class="row">
	        <div class="input-field col m2 s12">
				SPI : 
			</div>
	        <div class="input-field col m1 s2">
	          <input id="first_name" type="number" step="0.01" min="1" max="10" class="validate">
	          <label for="first_name">Sem 1</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input id="last_name" type="number" step="0.01" min="1" max="10" class="validate">
	          <label for="last_name">Sem 2</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input id="last_name" type="number" step="0.01" min="1" max="10" class="validate">
	          <label for="last_name">Sem 3</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input id="last_name" type="number" step="0.01" min="1" max="10" class="validate">
	          <label for="last_name">Sem 4</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input id="first_name" type="number" step="0.01" min="1" max="10" class="validate">
	          <label for="first_name">Sem 5</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input id="last_name" type="number" step="0.01" min="1" max="10" class="validate">
	          <label for="last_name">Sem 6</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input id="last_name" type="number" step="0.01" min="1" max="10" class="validate">
	          <label for="last_name">Sem 7</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input id="last_name" type="number" step="0.01" min="1" max="10" class="validate">
	          <label for="last_name">Sem 8</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s3">
	          <input id="first_name" type="number" class="validate">
	          <label for="first_name">Total Block</label>
	        </div>
	        <div class="input-field col s3">
	          <input id="last_name" type="number" class="validate">
	          <label for="last_name">Current Block</label>
	        </div>
	        <div class="input-field col s3">
	          <input id="last_name" type="number" class="validate">
	          <label for="last_name">CPI</label>
	        </div>
	        <div class="input-field col s3">
	          <input id="last_name" type="number" class="validate">
	          <label for="last_name">CGPA</label>
	        </div>
      	</div>
      	<div class="row">
      		<div class="file-field input-field col s6">
		      <div class="btn">
		        <span>File</span>
		        <input type="file">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" placeholder="Upload Photo" type="text">
		      </div>
		    </div>
		    <div class="file-field input-field col s6">
		      <div class="btn">
		        <span>File</span>
		        <input type="file">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" placeholder="Upload Resume" type="text">
		      </div>
		    </div>
      	</div>
      	<button class="btn waves-effect waves-light" type="submit" name="action">Submit
		   <!-- <i class="material-icons right">send</i> -->
		</button>

    </form>
 </div>
<script type="text/javascript">
	$('select').material_select();
</script>
@endsection
@extends('regheader')

@section('content')
<script>
    $(document). ready(function (){
    
		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 30, // Creates a dropdown of 15 years to control year
		    format: 'dd-mm-yyyy'
		  });
    });
</script> 
<h3 align="center">Student Registration</h3>
 <div class="row">
    <form class="col s12" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
    	<h6>Personal Details</h6>
    	{{ csrf_field()}}
    	<div class="row">
	        <div class="input-field col s4">
	          <input id="password" name="enrollment" type="text" class="validate">
	          <label for="password">Enrollment</label>
	        </div>

	        <div class="input-field col s4">
	          <input  name="password" type="text" class="validate">
	          <label >Password</label>
	        </div>
	        <div class="input-field col s4">
	          <input  name="confirm_password" type="text" class="validate">
	          <label >Confirm Password</label>
	        </div>
      	</div>
 		<div class="row">
	        <div class="input-field col s4">
	          <input  name="fname" type="text" class="validate">
	          <label >First Name</label>
	        </div>
	        <div class="input-field col s4">
	          <input  name="mname" type="text" class="validate">
	          <label >Middle Name</label>
	        </div>
	        <div class="input-field col s4">
	          <input  name="lname" type="text" class="validate">
	          <label >Last Name</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s6">
	          <input  name="email" type="email" class="validate">
	          <label >Email</label>
	        </div>
	        <div class="input-field col s6">
	          <input type="date" name="dob" class="datepicker">
	          <label >Date Of Birth</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s12">
	          <input id="password" name="street" type="text" class="validate">
	          <label for="password">Street</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s4">
	          <input  name="pincode" type="text" class="validate">
	          <label >Pincode</label>
	        </div>
	        <div class="input-field col s4">
	          <input  name="city" type="text" class="validate">
	          <label >City</label>
	        </div>
	        <div class="input-field col s4">
	          <input  name="state" type="text" class="validate">
	          <label >State</label>
	        </div>
      	</div>
      	<h6>Education Details</h6>
      	<div class="row">
	      	<div class="input-field col s4">
			    <select required name="division" class="validate">
			      <option disabled="" selected>Division</option>
			      <option value="A">A</option>
			      <option value="B" selected>B</option>
			    </select>
			</div>
			<div class="input-field col s4">
			    <select required class="validate" name="branch">
			      <option disabled="" selected>Branch</option>
			      <option value="CE">CE</option>
			      <option value="IT" selected>IT</option>
			      
			    </select>
			</div>
			<div class="input-field col s4">
			    <select required class="validate" name="sem">
			      <option disabled >Semester</option>
			      <option value="1" selected> 1</option>
			      <option value="2"> 2</option>
			      <option value="3"> 3</option>
			      <option value="4"> 4</option>
			      <option value="5"> 5</option>
			      <option value="6"> 6</option>
			      <option value="7"> 7</option>
			      <option value="8"> 8</option>
			    </select>
			</div>
		</div>
		<div class="row">
	        <div class="input-field col m2 s12">
				SPI : 
			</div>
	        <div class="input-field col m1 s2">
	          <input type="number" name="sem1" value="7" step="0.01" min="1" max="10" class="validate">
	          <label >Sem 1</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input type="number" name="sem2" value="7" step="0.01" min="1" max="10" class="validate">
	          <label >Sem 2</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem3" value="7" step="0.01" min="1" max="10" class="validate">
	          <label >Sem 3</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem4" value="7" step="0.01" min="1" max="10" class="validate">
	          <label >Sem 4</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem5" value="7" step="0.01" min="1" max="10" class="validate">
	          <label >Sem 5</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem6" value="7" step="0.01" min="1" max="10" class="validate">
	          <label >Sem 6</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem7" value="7" step="0.01" min="1" max="10" class="validate">
	          <label >Sem 7</label>
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem8" value="7" step="0.01" min="1" max="10" class="validate">
	          <label >Sem 8</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s3">
	          <input type="number" min="0" max="15" value="2" class="validate" name="tblocks">
	          <label>Total Block</label>
	        </div>
	        <div class="input-field col s3">
	          <input type="number" min="0" max="5"  value="2" class="validate" name="cblocks">
	          <label >Current Block</label>
	        </div>
	        <div class="input-field col s3">
	          <input  type="number" value="7" step="0.01" min="1" max="10" class="validate" name="cpi">
	          <label >CPI</label>
	        </div>
	        <div class="input-field col s3">
	          <input  type="number" value="7" step="0.01" min="1" max="10" class="validate" name="cgpa">
	          <label >CGPA</label>
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
      	<button class="btn waves-effect waves-light" type="submit" name="action">Save
		   <!-- <i class="material-icons right">send</i> -->
		</button>

    </form>
 </div>
<script type="text/javascript">
	$('select').material_select();
</script>
@endsection
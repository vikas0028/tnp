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
    <form class="col s12" id="reg-form" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
    	<h6>Personal Details</h6>
    	{{ csrf_field()}}
    	<div class="row">
	        <div class="input-field col s4">
	          <input id="enrollment"  name="enrollment" type="text"  placeholder="Emrollment">
	         <!--  <label for="enrollment" class="k" >Enrollment</label> -->
	        </div>

	        <div class="input-field col s4">
	          <input  name="password" type="text" class="validate" placeholder="password" id="pass">
	          <!-- <label >Password</label> -->
	        </div>
	        <div class="input-field col s4">
	          <input  name="confirm_password" type="text" class="validate" placeholder="comfirm password">
	          <!-- <label >Confirm Password</label> -->
	        </div>
      	</div>
 		<div class="row">
	        <div class="input-field col s4">
	          <input  name="fname" type="text" class="validate" placeholder="First Name">
	          <!-- <label >First Name</label> -->
	        </div>
	        <div class="input-field col s4">
	          <input  name="mname" type="text" class="validate" placeholder="Middle Name">
	         <!--  <label >Middle Name</label> -->
	        </div>
	        <div class="input-field col s4">
	          <input  name="lname" type="text" class="validate" placeholder="Last Name">
	          <!-- <label >Last Name</label> -->
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s3">
	          <input  name="email" type="email" class="validate" placeholder="Email">
	          <!-- <label >Email</label> -->
	        </div>
	        <div class="input-field col s3">
	          <input  name="contact" type="number" class="validate" placeholder="Contact Number">
	          <!-- <label >Contact Number</label> -->
	        </div>
	        <div class="input-field col s3">
	          <input type="date" name="dob" class="datepicker" placeholder="Date of Birth">
	          <!-- <label >Date Of Birth</label> -->
	        </div>
	        <div class="input-field col s3">
	         		<!-- <input name="group1" type="radio" value="Male"  id="test1" class="with-gap gen" />
      					<label for="test1">Male</label>
      				<input name="group1" type="radio" value="Female" id="test2" class="with-gap gen" />
      					<label for="test2">Female</label> -->
      				<select required name="gender" class="validate">
				      <option  disabled selected>Gender</option>
				      <option value="Male">Male</option>
				      <option value="Female">Female</option>
				    </select>

	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s12">
	          <input id="password" name="street" type="text" class="validate" placeholder="Street">
	          <!-- <label for="password">Street</label> -->
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s4">
	          <input  name="pincode" type="text" class="validate" placeholder="Pincode">
	          <!-- <label >Pincode</label> -->
	        </div>
	        <div class="input-field col s4">
	          <input  name="city" type="text" class="validate" placeholder="city">
	          <!-- <label >City</label> -->
	        </div>
	        <div class="input-field col s4">
	          <input  name="state" type="text" class="validate" placeholder="State">
	          <!-- <label >State</label> -->
	        </div>
      	</div>
      	<h6>Education Details</h6>
      	<div class="row">
	      	<div class="input-field col s4">
			    <select required name="division" class="validate">
			      <option disabled="" disabled>Division</option>
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
			      <option value="1" selected required > 1</option>
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
	          <input type="number" name="sem1" value="7" step="0.01" min="1" max="10" class="validate" placeholder="Sem1">
	          <!-- <label >Sem 1</label> -->
	        </div>
	        <div class="input-field col m1 s2">
	          <input type="number" name="sem2" value="7" step="0.01" min="1" max="10" class="validate" placeholder="Sem 2">
	          <!-- <label >Sem 2</label> -->
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem3" value="7" step="0.01" min="1" max="10" class="validate" placeholder="Sem 3">
	          <!-- <label >Sem 3</label> -->
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem4" value="7" step="0.01" min="1" max="10" class="validate" placeholder="Sem 4">
	          <!-- <label >Sem 4</label> -->
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem5" value="7" step="0.01" min="1" max="10" class="validate" placeholder="Sem 5">
	          <!-- <label >Sem 5</label> -->
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem6" value="7" step="0.01" min="1" max="10" class="validate" placeholder="Sem 6">
	          <!-- <label >Sem 6</label> -->
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem7" value="7" step="0.01" min="1" max="10" class="validate" placeholder="Sem 7">
	          <!-- <label >Sem 7</label> -->
	        </div>
	        <div class="input-field col m1 s2">
	          <input  type="number" name="sem8" value="7" step="0.01" min="1" max="10" class="validate" placeholder="Sem 8">
	          <!-- <label >Sem 8</label> -->
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s3">
	          <input type="number" min="0" max="15" value="2" class="validate" name="tblocks" placeholder="Total Block">
	          <!-- <label>Total Block</label> -->
	        </div>
	        <div class="input-field col s3">
	          <input type="number" min="0" max="5"  value="2" class="validate" name="cblocks" placeholder="Current Block">
	          <!-- <label >Current Block</label> -->
	        </div>
	        <div class="input-field col s3">
	          <input  type="number" value="7" step="0.01" min="1" max="10" class="validate" name="cpi" placeholder="CPI">
	          <!-- <label >CPI</label> -->
	        </div>
	        <div class="input-field col s3">
	          <input  type="number" value="7" step="0.01" min="1" max="10" class="validate" name="cgpa" placeholder="CGPA">
	          <!-- <label >CGPA</label> -->
	        </div>
      	</div>
      	<div class="row">
      		<div class="file-field input-field col s6">
		      <div class="btn">
		        <span>Select Image</span>
		        <input type="file" name="avatar">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" accept="*.jpg,*.png,*.jpeg" placeholder="Upload Photo" type="text">
		      </div>
		    </div>
		    <div class="file-field input-field col s6">
		      <div class="btn">
		        <span>Select File</span>
		        <input type="file" name="resume">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" accept="*.pdf" placeholder="Upload Resume" type="text">
		      </div>
		    </div>
      	</div>
      	<button class="btn waves-effect waves-light" type="submit" name="action">Save
		   <!-- <i class="material-icons right">send</i> -->
		</button>

    </form>
 </div>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
 <script src="/js/validate.js"></script>
 
<script type="text/javascript">
	$('select').material_select();
	$('.gen').material_radio();
</script>
@endsection
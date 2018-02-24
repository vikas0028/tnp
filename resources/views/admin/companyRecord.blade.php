@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
<div class="container-fluid">
	
	<ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="./">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Company Record</li>
    </ol>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="card mb-3">
    			<div class="card-body">
    				<form method="post"  id="add-company" action="{{ url('/admin/CompanyRecord') }}" >
    					{{-- <input type="hidden" name="_token" id="tk" value="HxBhGU6xO86QRJV9jO3RUufPPaoFpYx8sXlDARJ2"> --}}
    					{{ csrf_field() }}
    					
    					<div class="form-row">
	    					<div class="col-4">
	    							<label for="name"> Company Name</label>
	    							<input type="text" name="name" id="name" class="form-control" placeholder="Companiy Name" value="sellnews" required>
	    					</div>
	    					<div class="col-4">
	    							<label for="email"> Company Email</label>
	    							<input type="email" name="email" id="email" class="form-control" placeholder="Companiy Email" value="sellnews@gmail.com" required>
	    					</div>
	    					<div class="col-4">
	    							<label for="contact"> Company Contact</label>
	    							<input type="number" name="contact" id="contact" class="form-control" placeholder="Companiy Name" value="9758362214" required>
	    					</div>
    					</div>
    					<div class="form-row">
	    					<div class="col-4">
	    							<label for="branch">Branch</label>
	    							<select name="branch" id="branch" class="custom-select  col-3" required>
									  <option selected disabled>Branch</option>
									  <option value="IT" selected>IT</option>
									  <option value="CE">CE</option>
									  
									</select>
	    					</div>
	    					<div class="col-4">
	    							<label for="year">Year</label>
	    							<select name="year" id="year" class="custom-select  col-3" required>
									  <option selected disabled>Year</option>
									  <option value="2018" selected>2018</option>
									  <option value="2019">2019</option>
									  <option value="2020">2020</option>
									</select>
	    					</div>
	    					<div class="col-4">
    							<label for="students_placed"> Student Placed</label>
    							<input type="number" name="student_placed" id="student_placed" class="form-control" placeholder="Student Placed" value="5" required>
    						</div>
	    					
    					</div>
    					<div class="form-row">
    						<div class="col-4">
	    							<label for="package">Package(L/A)</label>
	    							<input type="number" step="0.01" name="package" id="package" class="form-control" placeholder="Student placed" value="1.8" required>
	    					</div>
    						<div class="col-4">
	    							<label for="city"> City</label>
	    							<input type="text" name="city" id="city" class="form-control" placeholder="City" value="abad" required>
	    					</div>
	    					<div class="col-4">
	    							<label for="state">State</label>
	    							<input type="text" name="state" id="state" class="form-control" placeholder="Statee" value="Gujarat" required>
	    					</div>
    						
    					</div>
    					<div class="row">
    						<div class="col-12">
    						<div class="custom-file">
    							<label class="custom-file-label" for="company_logo">Company Logo</label>
							  <input type="file" name="company_logo" width="50%" height="50%" class="custom-file-input form-control" id="company_logo">
							  
							</div>
						</div>
    					</div>
    					<div class="row">
    						<dir class="col-3">
    							<button style="padding-right:30px;padding-left: 30px;" class="btn btn-primary" type="submit" id="add">Add</button>
    						</dir>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</div>

@endsection
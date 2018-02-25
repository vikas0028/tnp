@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
<div class="container-fluid" id= "app">
		<div class="row">
		    	<div class="col-lg-12">
		    		<div class="card mb-3">
		    			<div class="card-body">
		    				<form method="POST" action="{{ url('/admin/PlacementRecord/updateRecord') }}" id="add-record" >
		    					{{csrf_field()}}
		    					<input type="hidden"  name="id" value="{{ $data->id }}">
		    					<div class="form-row" >
		    						<div class="col-4">
		    							<label for="year">Year</label>
		    							<select name="year"  id="year" class="custom-select  col-3" required>
										  <option selected disabled>Year</option>
										  <option {{ $data->year == '2018' ? 'Selected' : "" }} value="2018" >2018</option>
										  <option {{ $data->year == '2019' ? 'Selected' : "" }} value="2019">2019</option>
										  <option {{ $data->year == '2020' ? 'Selected' : "" }} value="2020">2020</option>
										</select>
		    						</div>
		    						<div class="col-4">
		    							<label for="companies_visited"> Companies Visited</label>
		    							<input  type="number" name="companies_visited" id="companies_visited" value="{{ $data->companies_visited }}" class="form-control" placeholder="Companies Visited" required>
		    						</div>
		    						<div class="col-4">
		    							<label for="students_placed"> Student Placed</label>
		    							<input  type="number" name="students_placed" id="students_placed" class="form-control" value="{{ $data->students_placed  }}" placeholder="Student Placed" required>
		    						</div>
		    						<dir class="col-3">
		    							<button style="padding-right:30px;padding-left: 30px;" class="btn btn-primary" type="submit" id="add" > Update </button>
		    						</dir>
		    						
		    					</div>
		    					<!-- <dir class="form-row">
		    						<dir class="col-4">
		    						<button class="btn btn-primary" id="btn-add" type="submit">Add</button>
		    						</dir>
		    					</dir> -->
		    					
		    				</form>
		    				
		    			</div>
		    			
		    		</div>
		    		
		    	</div>
		    	
		    </div>
	</div>
</div>

@endsection()
@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
<div class="container-fluid">
	
	<ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="./">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Placement Record</li>
    </ol>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="card mb-3">
    			<div class="card-body">
    				<form method="post"  id="add-record" >
    					{{csrf_field()}}
    					<div class="form-row" >
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
    							<label for="companies_visited"> Companies Visited</label>
    							<input type="number" name="companies_visited" id="companies_visited" class="form-control" placeholder="Companies Visited" value="5" required>
    						</div>
    						<div class="col-4">
    							<label for="students_placed"> Student Placed</label>
    							<input type="number" name="students_placed" id="students_placed" class="form-control" placeholder="Student Placed" value="5" required>
    						</div>
    						<dir class="col-3">
    							<button style="padding-right:30px;padding-left: 30px;" class="btn btn-primary" type="submit" id="add">Add</button>
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
     <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-body" style="overflow-x: scroll;overflow-y: scroll; ">
                    <div>
                    <table class="table table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Companies Visited</th>
                                <th>Student Placed</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->year }}</td>
                                    <td>{{ $d->companies_visited }}</td>
                                    <td>{{ $d->students_placed }}</td>
                                    <td>
                                        <button class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   {{--  @foreach($data as $d)
        {{  $d->year }}
    @endforeach --}}
</div>
</div>
<script type="text/javascript">
     $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
</script>
<script type="text/javascript">


	$(document).ready(function(){

		$('#add').click(function(){
            var _token = $('[name=csrf-token]').attr('content');
			var year = $('#year').val();
            var companies_visited = $('#companies_visited').val();
            var students_placed = $('#students_placed').val();

            $.ajax({

                type: "post",
                url: "/api/addRecord",
                data: { 
                    _token:_token,
                    year:year,
                    companies_visited:companies_visited,
                    students_placed:students_placed  
                }
                // success:function(msg){
                //     console.log(msg);
                // }

            });

		});
	});
</script>

@endsection()
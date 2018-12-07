@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
<div class="container-fluid" id= "app">
	
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
    				<form v-on:submit.prevent="hadleSubmit" id="add-record" >
    					{{csrf_field()}}
    					<div class="form-row" >
    						<div class="col-4">
    							<label for="year">Year</label>
    							<select name="year" v-model="year" id="year" class="custom-select  col-3" required>
								  <option selected disabled>Year</option>
								  <option value="2018" selected>2018</option>
								  <option value="2019">2019</option>
								  <option value="2020">2020</option>
								</select>
    						</div>
    						<div class="col-4">
    							<label for="companies_visited"> Companies Visited</label>
    							<input v-model="companies_visited" type="number" name="companies_visited" id="companies_visited" class="form-control" placeholder="Companies Visited" required>
    						</div>
    						<div class="col-4">
    							<label for="students_placed"> Student Placed</label>
    							<input v-model="students_placed" type="number" name="students_placed" id="students_placed" class="form-control" placeholder="Student Placed" required>
    						</div>
    						<dir class="col-3">
    							<button style="padding-right:30px;padding-left: 30px;" class="btn btn-primary" type="submit" id="add" :disabled="submitProcess"> <% submitProcess ? 'Adding..' : 'Add' %> </button>
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
                    <table class="table table-striped" >
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Companies Visited</th>
                                <th>Student Placed</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="tableData.length > 0" v-for="t in tableData">
                                
                                <td> <% t.year %></td>
                                <td> <% t.companies_visited %></td>
                                <td> <% t.students_placed %></td>
                                <td>  <a :href="t.href" class="btn btn-primary">Edit</a> </td>

                            </tr>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->year }}</td>
                                    <td>{{ $d->companies_visited }}</td>
                                    <td>{{ $d->students_placed }}</td>
                                    <td>
                                        <a href="{{url('/admin/PlacementRecord/edit')}}/{{$d->id}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                            <form method="post" action="{{ url('admin/PlacementRecord/DeletRecord') }}" >
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $d->id }}">
                                                <button type="submit" class="btn btn-danger"> Delete </button>
                                            </form>
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
 <script src="{{url('/js/vue.js')}}"></script>
<script type="text/javascript">
     $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
</script>
<script type="text/javascript">
new Vue({
    el : "#app",
        delimiters : ['<%', '%>'],
     data: { 
        tableData : [],
            _token: $('meta[name="csrf-token"]').attr('content'),
            year:2018,
            companies_visited:5,
            students_placed:15  ,
            submitProcess : false
        },
    methods :{
        hadleSubmit: function(){
            self = this;
            self.submitProcess = true;
            var dataObj = {
                _token: this._token,
                year:this.year,
                companies_visited:this.companies_visited,
                students_placed:this.students_placed  
            };
             $.ajax({

                type: "post",
                url: "/api/addRecord",
                data: dataObj,
                 success:function(msg){
                        dataObj.href= "/rec/ed/"+"1234";
                        self.tableData.unshift(dataObj);
                        self.submitProcess = false;
                        console.log(self.tableData);
                 }

            });
            return false
        }
    }
})

	
</script>

@endsection()
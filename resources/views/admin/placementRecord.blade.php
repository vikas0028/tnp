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
                <div class="card-header">
                    Insert Student Record 
                </div>
    			<div class="card-body">
    				<form action="{{url('/admin/import')}}" method="POST" enctype="multipart/form-data" >
    					{{csrf_field()}}

    					<input type="file" name="student">
    					<button type="submit" class="btn btn-info">Save</button>
    					
    				</form>
    				
    			</div>
    			
    		</div>
    		
    	</div>
    	
    </div>
     
   {{--  @foreach($data as $d)
        {{  $d->year }}
    @endforeach --}}
   {{--  <div class="row">
        <div class="col-lg-12">
            <div class="card md-3">
                <div class="card-header">
                    Search Record
                </div>
                <div class="card-body">
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>
</div> --}}
 

@endsection()
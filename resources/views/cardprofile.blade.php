@extends('layouts.newapp')

@section('content')

<style type="text/css">
	/**{outline: 1px dashed red;}*/
	.floater-main{
	    margin-top: 100px;
	    padding: 40px;
	    min-height: 377px;
	    display: block;
	}
	.gallery-action {
	    top: 0px;
	    z-index: 2;
	}
	.img-parent-cont > img{
		overflow: hidden;
		/*border-radius: 50%;*/
		margin-top:-70px;
		border: 5px solid white;
	}
	.elps{
		text-overflow: ellipsis;
	}
/*	.img-parent-cont>img{
		width: 100%;
		height: auto;
	}*/
</style>
<div class="container">
	
	<main class="floater-main  white z-depth-1">	
		<div class="row">
			<div class="gallery-action right" >
	             <a class="orange btn-floating btn-large waves-effect waves-light k tooltipped" href="{{ url('/profile/edit')
	            }} " data-position="right" data-delay="10" data-tooltip="Edit Profile" ><i class="material-icons" >edit</i></a>
	            
	            <a class="orange btn-floating btn-large waves-effect waves-light k modal-trigger tooltipped" 
	            href="#model1" data-position="right" id="pass" onclick="return ForModel()"  data-delay="10" data-tooltip="Change Password" ><i class="material-icons" >lock</i></a>
	        </div>

	        <div id="modal1" class="modal">
			    <div class="modal-content">
			      <h4>Modal Header</h4>
			      <p>A bunch of text</p>
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			    </div>
			  </div>







	        <div class="col s8 m3">    	
		        <div class="img-parent-cont z-depth-2" >
					<!-- <img src="https://goo.gl/bZskn9"> -->
					<img width="100%" src="{{url('/resources/avatars/')}}/{{$user->avatar}}">
		        </div>
	        </div>
	        <div class="col s12 m8">
	        	<h3>{{ $user->name }}</h3>
	        </div>
		</div>
		<div class="row">
			
	            <div class="col s12 m6">
		          <div class="card light-green darken-1">
		            <div class="card-content white-text">
		              <span class="card-title">{{ $user->enrollment}} 
		              	<strong> <a class="white-text">{{ $user->branch }} - {{$user->division}}</a>
		              <a class="white-text">SEM {{ $user->sem }}</a> </strong>

		              </span>
		              <span class="card-title">{{ $user->cpi }} <strong>CPI </strong></span>
		              <span class="card-title">{{ $user->cgpa }} <strong>CGPA </strong></span>
		              
		            </div>
		            <div class="card-action green">
		             
		              <a class="white-text">Total Block : {{ $user->tblocks }}</a>
		              <a class="white-text">Current Block  : {{ $user->cblocks }}</a>
		            </div>
		          </div>
		        </div>


		       	<div class="col s12 m6">
		          <div class="card light-blue darken-1">
		            <div class="card-content white-text">
		              <span class="flow-text email-patch ">
		              	<strong class="elps">
		              	{{ $user->email}}
		              	</strong>
		              </span>
		              <span class="card-title">+91 {{ $user->contact }} </span>
		              <p> {{$user->address}} </p>
		            </div>
		            <div class="card-action light-blue">
		              <!-- <a class="white-text">{{ $user->branch }} - {{$user->division}}</a>
		              <a class="white-text">SEM {{ $user->sem }}</a> -->
		              &nbsp
		            </div>
		          </div>
		        </div>	

		       	<div class="col s12 m12">
		          <ul class="collapsible popout" data-collapsible="accordion">
		          	<li>
				      <div class="collapsible-header yellow darken-1"><i class="material-icons">whatshot</i>Semester Performence Indexes (SPI)</div>
				      <div class="collapsible-body yellow">
				      
				     
				      	<div class="row">
					      @for( $i = 1; $i < $user->sem; $i++ )
						      	<div class="col s3">
						          <div class="card light-blue darken-1">
						            <div class="card-content white-text">
						              <p>SEM {{$i}}</p>
						              <span class="card-title"> {{$user->getOriginal('sem'.$i) }} </span>
						            </div>
						          </div>
						        </div>
					      @endfor
				      	</div>
				      </div>
				    </li>
		        </ul>
		    </div>

	      
		</div>
	</main>

</div>
<script type="text/javascript">
	
	function ForModel(){
		$('.modal').modal();
		$('#modal1').modal('open');
		$('.trigger-modal').modal();
	}
	
	
</script>
<script type="text/javascript">
	
		$(document).ready(function () {
			
			$("#changeProfileView").attr("href","/profile");
			$('body').addClass('deep-purple lighten-3');
	
		});
	
	
</script>
@endsection
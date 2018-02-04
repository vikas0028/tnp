
$(function(){

	$.validator.setDefaults({

		highlight : function(element){

			$(element).closest('input').addClass('invalid');

		},
		unhighlight : function(element){
			$(element).closest('input').removeClass('invalid');
		}

	});

	$('#reg-form').validate({

		rules:{
			enrollment:{
				required : true,
			},
			password:{
				required : true,
			},
			confirm_password:{
				required : true,
				equalTo : "#pass",
			},
			fname:{
				required : true,
				nowhitespace: true,
			},
			mname:{
				required : true,
				nowhitespace: true,
			},
			lname:{
				required : true,
				nowhitespace: true,
			},
			email: "required",
			contact: "required",
			dob: "required",
			street: "required",
			pincode: "required",
			city: "required",
			state: "required",
			division: "required",
			sem: "required",
			avatar: "required",
			resume: "required",


		}

	});

});

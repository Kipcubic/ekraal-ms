$('document').ready(function() { 
	/* handling form validation */
	$("#login-form").validate({
		rules: {
			password: {
				required: true,
			},
			user_email: {
				required: true,
				email: true
			},
		},
		messages: {
			password:{
			  required: "please enter your password"
			 },
			user_email: "please enter your email address",
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */
	function submitForm() {		
		var data = $("#login-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'login.php',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#continue_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Checking Again');
			},
			success : function(response){						
				if(response=="ok"){									
					$("#login_button").html(' &nbsp; Login in ...');
					setTimeout(' window.location.href = "portal/index.php"; ',100);				
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
						
					});
				}
			}
		});
		return false;
	}   

 
});
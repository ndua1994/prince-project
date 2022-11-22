/*login form validation starts*/


$('#login-frm').validate({


rules:
{
	email_id:
	{
		required:true,
		email:true
	},
	password:
	{
		required:true

	}
},
messages:
{
	email_id:
	{
		required:'Email ID is required',
		email:'Enter a valid Email ID'
	},
	password:
	{
		required:'Password is required'
	}

},
submitHandler:function()
{
	$.ajax({

		url:base_url+'ajax/login.php',
		data:$('#login-frm').serializeArray(),
		type:'POST',
		dataType:'json',
		beforeSend:function()
		{
			$('button[name="login_submit"]').prop('disabled',true);
			$('button[name="login_submit"]').text('Please Wait...');
		},
		success:function(r)
		{

		}




	});
}


});


/*login form validation ends*/
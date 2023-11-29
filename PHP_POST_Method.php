<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
        body{
           background-color: #F0F2F5;
        }
	</style>	
</head>
<body>
<div class="container">
	<form action="PHP_POST_Method_Acton.php" method="POST"  target="_blink">
		<div class="row">
			<div class="col-sm-6 mx-auto">
				<div class="card mt-5 mb-5">
					<div class="col-sm-12">
						<h3>Sign Up</h3>
						<span class="text-secondary font-weight-bold">It's quick and easy.</span>
					</div>
					<hr>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6 from-group">
								<input type="text" name="first_name" required id="first_name" placeholder="First Name" autocomplete="off" class="form-control" data-toggle="tooltip" title="Enter name">
							</div>

							<div class="col-sm-6 form-group">
									<input type="text" name="surename" required id="surename" placeholder="Surename" autocomplete="off" class="form-control"> 
							</div> 

							<div class="col-sm-12 form-group">
								<input type="text" name="mail_number" required id="mail_number" placeholder="Mobile number or email address" autocomplete="off" class="form-control"> 
							</div> 

							<div class="col-sm-12 form-group">
								<input type="password" name="password" required id="password" placeholder="New password" autocomplete="off" class="form-control"> 
							</div>

							<div class="col-sm-12 form-group">
								<small class="text-secondary font-weight-bold">Date of birth</small>
								<input type="date" name="date" id="date" required class="form-control"> 
							</div>

							<div class="col-sm-12">
								<small class="text-secondary font-weight-bold">Gender</small>
							</div>
							
							<div class="col-sm-4 form-group">
								<label class="form-control">
									<span class="mr-5">Female</span> 
									<input type="radio" name="gender" id="female" value="Female">
								</label>
							</div> 
							
							<div class="col-sm-4 form-group" >
								<label class="form-control">
									<span class="mr-5">Male</span>  
									<input type="radio" name="gender" id="male" value="Male">
								</label>
							</div> 
							
							<div class="col-sm-4 form-group" >
								<label class="form-control">
									<span class="mr-5">Custom</span>  
									<input type="radio" name="gender" id="custom" value="Custom" onclick="fn_div_show()" >
								</label>
							</div>

							<div class="col-sm-12 form-group costom_div">
								<select name="costom_select" id="costom_select" class="form-control">
									<option value="">Slelect your prououn</option>
									<option value="She">She</option>
									<option value="He">He</option>
									<option value="They">They</option>
								</select>
							</div>

							<div class="col-sm-12 form-group optional_div">
								<small class="text-secondary font-weight-bold">Your pronoun is visible to everyone.</small>
								<input type="text" name="optional" id="optional" autocomplete="off" class="form-control">
							</div>

							<div class="col-sm-12 form-group text-center">
								<!--for jqure
								<button class="btn btn-success btn-md px-5" type="button" onclick="fn_sign_up();">Sign Up</button>
								-->                                   
								<!--for php-->
								<button class="btn btn-success btn-md px-5" type="submit" onclick="fn_sign_up();">Sign Up</button>                              
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</form>
</div>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/popper.min.js"></script>
<script>
	// hide and show finction
	$(document).ready(function(){
   		$(".costom_div").hide();
		$(".optional_div").hide();
 	});

	function fn_div_show(){
		var gender =  $("#custom").val();

		if(gender == "Custom"){
			$(".costom_div").show();
			$(".optional_div").show();
		}
	}   

	  //jquery form validtion
	function fn_sign_up(){
		var first_name = $("#first_name").val();
		var surename = $("#surename").val();
		var mail_number = $("#mail_number").val();
		var password = $("#password").val();
		var date = $("#date").val();

		  //condition,if input fild null
		if(first_name == ''){
			alert("enter your first name");
			$("#first_name").focus();
			// $("#first_name").css({"border":"1px solid red","box-shadow":"0 0 3px red"});
			return false;
		}
		else if(surename == ''){
			alert("Enter Your Surename");
			$("#surename").focus();
			// $("#first_name").css({"border":"1px solid red","box-shadow":"0 0 3px red"});
			return false;
		}
		else if(mail_number == ''){
			alert("Enter Your Email Address");
			$("#mail_number").focus();
			// $("#first_name").css({"border":"1px solid red","box-shadow":"0 0 3px red"});
			return false;
		}
		else if(password == ''){
			alert("enter your password");
			$("#password").focus();
			// $("#first_name").css({"border":"1px solid red","box-shadow":"0 0 3px red"});
			return false;
		}
		else if(date == ''){
			alert("enter date");
			$("#date").focus();
			return false;
		}
	}

</script>

</body>
</html>
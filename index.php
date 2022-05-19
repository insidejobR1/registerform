<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//geodata.solutions/includes/countrystatecity.js"></script>

</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="create.php" method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Register Form.!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Password</span>
					<input class="input100" type="text" name="psw" placeholder="Enter your password">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Contact</span>
					<input class="input100" type="text" name="contact" placeholder="Enter your contact here">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label>Gender</lable>
					<div class="form-check form-check-inline">
  
				<input class="form-check-input" type="radio" id="inlineCheckbox1" value="Male" name="gender" style="margin-left: 162px;">
            <label class="form-check-label" for="inlineCheckbox1" >Male</label>
         </div>
         <div class="form-check form-check-inline">
     <input class="form-check-input" type="radio" id="inlineCheckbox1" value="Female" name="gender" style="margin-left: 1px;">
     <label class="form-check-label" for="inlineCheckbox2">Female</label>
    </div>
					<!-- <input class="input100" type="checkbox" name="Gender" placeholder="Select your gender ">
					<input class="input100" type="checkbox" name="Gender" placeholder="Select your gender ">
					<span class="focus-input100"></span> -->
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Address</span>
					<input class="input100" type="text" name="add" placeholder="Enter your  addess">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Picture</span>
					<input class="input100" type="file" name="img" placeholder="Upload your image here" id="fileToUpload">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 input100-select">
					<span class="label-input100" name="service">Select hobby</span>
					<div>
						<select class="selection-2" name="service">
							<option>Choose hobby's</option>
							<option>Dancing </option>
							<option>Reading</option>
							<option>Music</option>
							<option> reality Show</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Country</span>
					<div>
			<select name="country"  class="countries  selection-2" name="country" id="countryId">
               <option value="">Select Country</option>
       </select>
	         <span class="label-input100">states </span>
	<div>
		<select name="state"  class="states   selection-2" name="country" id="stateId">
               <option value="">Select State</option>
       </select>
   </div>
   <span class="label-input100">City </span>
	<div>
		<select name="city"  class="cities   selection-2" name="country" id="cityId">
               <option value="">Select City</option>
       </select>
   </div>
					<span class="focus-input100"></span>
			</div>

		
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" value="submit" name="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>

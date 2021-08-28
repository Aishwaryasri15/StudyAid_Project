<?php
require 'connection.php';
if(isset($_POST['submit']))
{



$email=$_POST["email"];
$name =$_POST["name"];
$phone =$_POST["phone"];
$city =$_POST["city"];
$query = "SELECT * FROM tutorsprofile WHERE email='$email' && tutor_name='$name' && tutor_phonenumber='$phone' && city='$city'";
$data1=mysqli_query($q,$query);
$a = mysqli_num_rows($data1);
    
if($a!=0){
    while($r2 = mysqli_fetch_assoc($data1))
  { 
       session_start();
	$_SESSION['user']=$email;
    $_SESSION['pass']=$pass;
	session_write_close(); 	
    header("Location: resetpass.php");
    exit ;
        
    }

	}
else
{
    echo '<script>alert("Entered deatails are wrong if you forgot them then Contact Admin")</script>';
    
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Application Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
	<link rel="stylesheet" type="text/css" href="assets/css/tutor_main.css">
<!--===============================================================================================-->
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body>
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" style="font-size:10px " method="post" enctype="multipart/form-data" >
				<span class="contact100-form-title">
					Forgot Password 
				</span>

				

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your Name " required>
					<span class="focus-input100" ></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
					<span class="label-input100">Phone Number</span>
					<input class="input100" type="text" name="phone" placeholder="Enter your Phone Number " required>
					<span class="focus-input100" ></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
					<span class="label-input100">City</span>
					<input class="input100" type="text" name="city" placeholder="Enter your City " required>
					<span class="focus-input100" ></span>
				</div>
				
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="submit" >
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
                
			</form>
            <div class="container-contact100-form-btn" style="width:25%; ">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a class="contact100-form-btn" href="tutorsignin.php"  name="login" >Sign In</a>
							
					</div>
				</div>
            
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
	<script src="assets/js/tutor_main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>




</body>
</html>

